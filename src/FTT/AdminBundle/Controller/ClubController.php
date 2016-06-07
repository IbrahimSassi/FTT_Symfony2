<?php

namespace FTT\AdminBundle\Controller;
use FTT\AdminBundle\Form\ClubType;
use FTT\AdminBundle\Entity\Club;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ClubController extends Controller {
    //put your code here
    
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clubs = $em->getRepository("FTTAdminBundle:Club")->findAll();
        
        $LogosClubs = array();
        foreach ($clubs as $key => $entity) {
        $LogosClubs[$key] = base64_encode(stream_get_contents($entity->getLogoClub()));
        }
        
  return $this->render("FTTAdminBundle:Club:listClub.html.twig", array("clubs" => $clubs,"LogosClubs"=> $LogosClubs));
   
    }
    
    
public function ajouterAction()
    {
        
        
        $Club = new Club();
        $Form = $this->createForm(new ClubType(), $Club);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $stream = fopen($Club->getLogoClub(), 'rb');
            $Club->setLogoClub(stream_get_contents($stream));
            $em->persist($Club);
            $em->flush();
            return $this->redirect($this->generateUrl('list_club'));
        }

        return $this->render("FTTAdminBundle:Club:ajouterClub.html.twig", array('Club'=>  $Club, 'Form' => $Form->createView()));

      
    }
    
public function supprimerAction($id)
    {   
       $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('FTTAdminBundle:Club')->find($id);
        $em->remove($club);
        $em->flush();
        return $this->redirect($this->generateUrl('list_club'));
      
    }
    
public function modifierAction($id)
    {
         $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('FTTAdminBundle:Club')->find($id);
        $Form = $this->createForm(new ClubType(), $club);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {
            $stream = fopen($Club->getLogoClub(), 'rb');
            $Club->setLogoClub(stream_get_contents($stream));
            $em->persist($club);
            $em->flush();
            return $this->redirect($this->generateUrl('list_club'));
        }
        
        return $this->render("FTTAdminBundle:Club:modifierClub.html.twig", array('Form' => $Form->createView()));
   
      
      
    }


}