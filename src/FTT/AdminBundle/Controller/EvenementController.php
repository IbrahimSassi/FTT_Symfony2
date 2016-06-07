<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\EvenementType;
use FTT\AdminBundle\Entity\Evenement;
use Symfony\Component\HttpFoundation\Request;


class EvenementController extends Controller
{
    public function AfficherEventsAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository("FTTAdminBundle:Evenement")->find($id);
        
        
        return $this->render("FTTAdminBundle:Evenement:evenement.html.twig",
                array("evenement" => $evenement,
                 
                    ));
    }
    public function listEventsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll();        
        
       

        return $this->render("FTTAdminBundle:Evenement:listevenement.html.twig",
                array("evenements" => $evenements,
                 
                    ));
        
    }
    
     public function suppEventsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('FTTAdminBundle:Evenement')->find($id);
        $em->remove($evenement);
        $em->flush();
        return $this->redirect($this->generateUrl('list_events'));
    }
    
    
    public function modifierEventsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('FTTAdminBundle:Evenement')->find($id);
        $Form = $this->createForm(new EvenementType(), $evenement);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($evenement);
            $em->flush();
            return $this->redirect($this->generateUrl('list_events'));
        }
        
        return $this->render("FTTAdminBundle:Evenement:modifierEvenement.html.twig", array('Form' => $Form->createView()));
    }
    
   public function ajouterEventsAction()
    {
        
        $Evenement2 = new Evenement();
        $Form = $this->createForm(new EvenementType(), $Evenement2);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Evenement2);
            $em->flush();
            return $this->redirect($this->generateUrl('list_events'));
        }

        return $this->render("FTTAdminBundle:Evenement:ajouterEvenement.html.twig", array('Form' => $Form->createView()));

    }
    
    
}
