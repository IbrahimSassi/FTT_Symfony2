<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\TicketType;
use FTT\AdminBundle\Entity\Ticket;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller {

    public function ajouterAction() {
        $em = $this->getDoctrine()->getManager();
        $Ticket = new Ticket();
        $Form = $this->createForm(new TicketType(), $Ticket);
        $request = $this->get('request_stack')->getCurrentRequest();



        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            
            $nb = $request->get('nbTicket');
            $Ticket->setNbrTicket($Ticket->getIdMatch()->getIdStade()->getCapacite()*($nb/100));
            $em->persist($Ticket);
            $em->flush();
            return $this->redirect($this->generateUrl('list_matchsInfo'));
        }
        return $this->render("FTTAdminBundle:Ticket:ajouterTicket.html.twig", 
                array('Form' => $Form->createView(),
                    
        ));
    }

}
