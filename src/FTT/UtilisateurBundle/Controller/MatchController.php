<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\UtilisateurBundle\Entity\ResultatMatchRespository;
use Symfony\Component\HttpFoundation\StreamedResponse;

class MatchController extends Controller {

    public function AfficherMatchsAction() {
        $em = $this->getDoctrine()->getManager();


        $request = $this->get('request_stack')->getCurrentRequest();
        $tickets = $em->getRepository("FTTAdminBundle:Ticket")->findAll();

        $entity = new \FTT\AdminBundle\Entity\MatchInfo();
        $form = $this->createFormBuilder($entity)
                ->add('idEvenement', null, array('attr' => array("class" => "form-control", 'style' => "color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'")))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findBy(array('idEvenement' => $entity->getIdEvenement()));
            $imagesJoueurs1 = array();
            $imagesJoueurs2 = array();
            $imagesJoueurs3 = array();
            $imagesJoueurs4 = array();

            foreach ($matchs as $key => $entity) {
                $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdJoueur1()->getImageJoueur()));
                $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdJoueur2()->getImageJoueur()));

                if ($entity->getIdJoueur3() != null) {
                    $imagesJoueurs3[$key] = base64_encode(stream_get_contents($entity->getIdJoueur3()->getImageJoueur()));
                    $imagesJoueurs4[$key] = base64_encode(stream_get_contents($entity->getIdJoueur4()->getImageJoueur()));
                }
            }

            $entities = $this->get('knp_paginator')->paginate(
                    $matchs, $request->query->get('page', 1)/* page number */, 6/* limit per page */
            );



            return $this->render("FTTUtilisateurBundle:Match:MatchDetail.html.twig", array("matchs" => $entities,
                        "imagesjoueurs1" => $imagesJoueurs1,
                        "imagesjoueurs2" => $imagesJoueurs2,
                        "imagesjoueurs3" => $imagesJoueurs3,
                        "imagesjoueurs4" => $imagesJoueurs4,
                        "gtickets" => '',
                        "tickets" => $tickets,
                        'form' => $form->createView(),
                        'evenement' => $entity->getIdEvenement()->getNomEvenement()
            ));
        }



        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findAll();
        $imagesJoueurs1 = array();
        $imagesJoueurs2 = array();
        $imagesJoueurs3 = array();
        $imagesJoueurs4 = array();

        foreach ($matchs as $key => $entity) {
            $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdJoueur1()->getImageJoueur()));
            $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdJoueur2()->getImageJoueur()));

            if ($entity->getIdJoueur3() != null) {
                $imagesJoueurs3[$key] = base64_encode(stream_get_contents($entity->getIdJoueur3()->getImageJoueur()));
                $imagesJoueurs4[$key] = base64_encode(stream_get_contents($entity->getIdJoueur4()->getImageJoueur()));
            }
        }
        $test = "rien";
        $entities = $this->get('knp_paginator')->paginate(
                $matchs, $request->query->get('page', 1)/* page number */, 6/* limit per page */
        );



        return $this->render("FTTUtilisateurBundle:Match:MatchDetail.html.twig", array("matchs" => $entities,
                    "imagesjoueurs1" => $imagesJoueurs1,
                    "imagesjoueurs2" => $imagesJoueurs2,
                    "imagesjoueurs3" => $imagesJoueurs3,
                    "imagesjoueurs4" => $imagesJoueurs4,
                    'form' => $form->createView(),
                    'evenement' => '',
                    "tickets" => $tickets,
                    "gtickets" => $test,
        ));
    }

    public function evaluationAction($id) {
        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($id);

        $user = $em->getRepository("FTTAdminBundle:User")->find($match->getIdArbitre()->getId());

        $request = $this->get('request_stack')->getCurrentRequest();
        $carriere = new \FTT\AdminBundle\Entity\CarriereArbitre();

        //evaluation arbitre
        $form = $this->createFormBuilder($carriere)
                ->add('evaluationMatch', 'rating', [
                    'label' => 'Notez l\'arbitre sur 5'
                ])
                ->add('save', 'submit', array("attr" => array("class" => "btn btn-flat")))
                ->getForm();

        $carriere->setIdArbitre($user);
        $carriere->setIdMatch($match);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->persist($carriere);
            $em->flush();
        }


        return $this->render("FTTUtilisateurBundle:Match:Evaluation.html.twig", array('match' => $match,
                    'form' => $form->createView(),
        ));
    }

    public function photoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $image_obj = $em->getRepository('FTTAdminBundle:Joueur')->find($id);
        $photo = $image_obj->getImageJoueur();
        $response = new StreamedResponse(function () use ($photo) {
            echo stream_get_contents($photo);
        });
        $response->headers->set('Content-Type', 'image/png');
        return $response;
    }

    public function AfficherMatchsApresTicketAction($idTicket) {
        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findAll();
        $tickets = $em->getRepository("FTTAdminBundle:Ticket")->findAll();
        $ticketsChoisie = $em->getRepository("FTTAdminBundle:Ticket")->find($idTicket);
        $request = $this->getRequest();
        $imagesJoueurs1 = array();
        $imagesJoueurs2 = array();
        $test = "rien";



        $entity = new \FTT\AdminBundle\Entity\MatchInfo();
        $form = $this->createFormBuilder($entity)
                ->add('idEvenement', null, array('attr' => array("class" => "form-control",
                        'style' => "color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'")))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findBy(array('idEvenement' => $entity->getIdEvenement()));
            $imagesJoueurs1 = array();
            $imagesJoueurs2 = array();
            $imagesJoueurs3 = array();
            $imagesJoueurs4 = array();

            foreach ($matchs as $key => $entity) {
                $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdJoueur1()->getImageJoueur()));
                $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdJoueur2()->getImageJoueur()));

                if ($entity->getIdJoueur3() != null) {
                    $imagesJoueurs3[$key] = base64_encode(stream_get_contents($entity->getIdJoueur3()->getImageJoueur()));
                    $imagesJoueurs4[$key] = base64_encode(stream_get_contents($entity->getIdJoueur4()->getImageJoueur()));
                }
            }

            $entities = $this->get('knp_paginator')->paginate(
                    $matchs, $request->query->get('page', 1)/* page number */, 6/* limit per page */
            );



            return $this->render("FTTUtilisateurBundle:Match:MatchDetail.html.twig", array("matchs" => $entities,
                        "imagesjoueurs1" => $imagesJoueurs1,
                        "imagesjoueurs2" => $imagesJoueurs2,
                        "imagesjoueurs3" => $imagesJoueurs3,
                        "imagesjoueurs4" => $imagesJoueurs4,
                        'form' => $form->createView(),
                        "tickets" => $tickets,
                        "gtickets" => '',
                        'evenement' => $entity->getIdEvenement()->getNomEvenement()
            ));
        }









        $user = $this->get('security.context')->getToken()->getUser();
//        if (!(empty($user))) {
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        foreach ($matchs as $key => $entity) {
            $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdJoueur1()->getImageJoueur()));
            $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdJoueur2()->getImageJoueur()));

            if ($entity->getIdJoueur3() != null) {
                $imagesJoueurs3[$key] = base64_encode(stream_get_contents($entity->getIdJoueur3()->getImageJoueur()));
                $imagesJoueurs4[$key] = base64_encode(stream_get_contents($entity->getIdJoueur4()->getImageJoueur()));
            }
        }


        $entities = $this->get('knp_paginator')->paginate(
                $matchs, $request->query->get('page', 1)/* page number */, 6/* limit per page */
        );
        $nbrDeTicketDispo = $ticketsChoisie->getNbrTicket();

        if ($request->getMethod() == "POST") {
            $nbrs = $this->get('request')->get('nbrs');
            $choix = $this->get('request')->get('choix-ticket');
            if ($choix == 'reserver') {
                if (($nbrs > $nbrDeTicketDispo)) {
                    $test = "nbrticketinsuf";
                } else if ($nbrs == 0) {
                    $test = "zeroTicket";
                } else {
                    for ($i = 0; $i < $nbrs; $i++) {
                        $ticketAdherent = new \FTT\AdminBundle\Entity\TicketAdherent();
                        $ticketAdherent->setEtat(-1);
                        $ticketAdherent->setIdAdherent($userManager);
                        $ticketAdherent->setIdTicket($ticketsChoisie);
                        $ticketAdherent->setDateReservation(new \DateTime());
                        $em->persist($userManager);
                        $em->persist($ticketAdherent);
                        $em->flush();
                        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($ticketsChoisie->getIdMatch());
                        $message = \Swift_Message::newInstance()
                                ->setSubject('Votre ticket')
                                ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                                ->setTo(array($userManager->getEmail()))
                                ->setContentType("text/html")
                                ->setBody($this->renderView('FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig', array('match' => $match, 'etat' => 'Reserve',
                                    'prix' => $ticketsChoisie->getPrixTicket())));
                        $this->get('mailer')->send($message);
                        $test = "ok";
                    }
                }
            } else if ($choix == 'acheter') {
                if ($nbrs == 0) {
                    $test = "zeroTicket";
                } else if (($nbrs > $nbrDeTicketDispo)) {
                    $test = "nbrticketinsuf";
                } else if ($userManager->getSoldeAdherent() < ($nbrs * $ticketsChoisie->getPrixTicket())) {
                    $test = "pasArgent";
                } else if (($nbrs < $nbrDeTicketDispo)) {
                    if ($userManager->getSoldeAdherent() >= ($nbrs * $ticketsChoisie->getPrixTicket())) {
                        for ($i = 0; $i < $nbrs; $i++) {
                            $ticketAdherent = new \FTT\AdminBundle\Entity\TicketAdherent();
                            $ticketAdherent->setEtat(1);
                            $ticketAdherent->setIdAdherent($userManager);
                            $ticketAdherent->setIdTicket($ticketsChoisie);
                            $ticketAdherent->setDateReservation(new \DateTime());
                            $em->persist($ticketAdherent);
                            $em->flush();
                            $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($ticketsChoisie->getIdMatch());
                            $message = \Swift_Message::newInstance()
                                    ->setSubject('Votre ticket')
                                    ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                                    ->setTo(array($userManager->getEmail()))
                                    ->setContentType("text/html")
                                    ->setBody($this->renderView('FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig',
                                            array('match' => $match, 'etat' => 'Achete',
                                        'prix' => $ticketsChoisie->getPrixTicket())));
                            $this->get('mailer')->send($message);
                        }
                        $somme = $nbrs * $ticketsChoisie->getPrixTicket();
                        $userManager->setSoldeAdherent($userManager->getSoldeAdherent() - $somme);
                        $em->persist($userManager);
                        $em->flush();
                        $test = "ok";
                    }
                }
            }
        }
//        }


        return $this->render("FTTUtilisateurBundle:Match:MatchDetail.html.twig", array("matchs" => $entities,
                    "tickets" => $tickets,
                    "gtickets" => $test,
                    "imagesjoueurs1" => $imagesJoueurs1,
                    "imagesjoueurs2" => $imagesJoueurs2,
                    "imagesjoueurs3" => $imagesJoueurs3,
                    "imagesjoueurs4" => $imagesJoueurs4,
                    'evenement' => '',
                    'form' => $form->createView(),
        ));
    }

}
