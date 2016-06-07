<?php

namespace FTT\AdherentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketController extends Controller {

    public function affichageAction() {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $ticketAdherent = $em->getRepository("FTTAdminBundle:TicketAdherent")->findBy(array('idAdherent' => $userManager->getId()));
        $request = $this->getRequest();

        $entities = $this->get('knp_paginator')->paginate(
                $ticketAdherent, $request->query->get('page', 1)/* page number */, 4/* limit per page */
        );

        return $this->render('FTTAdherentBundle:Tickets:TicketAdherent.html.twig', array("ticket" => $entities));
    }

    public function annulerAction($id) {

        $em = $this->getDoctrine()->getManager();
        $ticketAdherent = $em->getRepository("FTTAdminBundle:TicketAdherent")->find($id);
        $request = $this->getRequest();
        $ticket = $em->getRepository("FTTAdminBundle:Ticket")->find($ticketAdherent->getIdTicket());
        $request = $this->getRequest();
        $ticket->setNbrTicket($ticket->getNbrTicket() + 1);
        $em->persist($ticket);
        $em->remove($ticketAdherent);
        $em->flush();



        return $this->redirect($this->generateUrl('ticket_user'));
    }

    public function acheterAction($id) {

        $em = $this->getDoctrine()->getManager();
        $ticketAdherent = $em->getRepository("FTTAdminBundle:TicketAdherent")->find($id);
        $ticket = $em->getRepository("FTTAdminBundle:Ticket")->find($ticketAdherent->getIdTicket());
        $ticket->setNbrTicket($ticket->getNbrTicket() - 1);
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $request = $this->getRequest();
        $ticketAdherent->setEtat(1);
        $nvSolde = $userManager->getSoldeAdherent() - $ticketAdherent->getIdTicket()->getPrixTicket();
        $userManager->setSoldeAdherent($nvSolde);
        $em->persist($ticket);
        $em->persist($userManager);
        $em->persist($ticketAdherent);
        $em->flush();
        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($ticket->getIdMatch());
        $message = \Swift_Message::newInstance()
                ->setSubject('Votre ticket')
                ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                ->setTo(array($userManager->getEmail()))
                ->setContentType("text/html")
                ->setBody($this->renderView('FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig'
                        , array('match' => $match, 'etat' => 'Achete'
                    , 'prix' => $ticket->getPrixTicket())));
        $this->get('mailer')->send($message);

        return $this->redirect($this->generateUrl('ticket_user'));
    }
    
    public function envoiAction($id) {

        $em = $this->getDoctrine()->getManager();
        $ticketAdherent = $em->getRepository("FTTAdminBundle:TicketAdherent")->find($id);
        $ticket = $em->getRepository("FTTAdminBundle:Ticket")->find($ticketAdherent->getIdTicket());
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $request = $this->getRequest();
        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($ticket->getIdMatch());
        $message = \Swift_Message::newInstance()
                ->setSubject('Votre ticket')
                ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                ->setTo(array($userManager->getEmail()))
                ->setContentType("text/html")
                ->setBody($this->renderView('FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig'
                        , array('match' => $match, 'etat' => 'Achete'
                    , 'prix' => $ticket->getPrixTicket())));
        $this->get('mailer')->send($message);

        return $this->redirect($this->generateUrl('ticket_user'));
    }

}
