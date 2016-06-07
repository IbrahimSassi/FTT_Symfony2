<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\DonsClubForm;
use FTT\AdminBundle\Entity\DonsClubs;
use Symfony\Component\HttpFoundation\Request;


class DonsClubController extends Controller
{
    
    public function listdonsclubAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $donsClubss= $em->getRepository("FTTAdminBundle:DonsClubs")->findAll();        
        return $this->render("FTTAdminBundle:DonsClubs:listdonsClub.html.twig",
                array("donsClubss" => $donsClubss 
                 
                    ));
    }
     
     public function ajouterdonsclubAction()
    {
        
        $donsclub2 = new DonsClubs();
        $Form = $this->createForm(new DonsClubForm(), $donsclub2);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $donsclub2->setDateAffection(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($donsclub2);
            $em->flush();
            return $this->redirect($this->generateUrl('list_donsclub'));
        
          
        }

        return $this->render("FTTAdminBundle:DonsClubs:attribuerdonsclubs.html.twig", array('Form' => $Form->createView()));

 
    }
      public function suppdonsclubAction($id) {
        $em = $this->getDoctrine()->getManager();
        $donsClubss= $em->getRepository('FTTAdminBundle:DonsClubs')->find($id);
        $em->remove($donsClubss);
        $em->flush();
        return $this->redirect($this->generateUrl('list_donsclub'));
    }
    
}
