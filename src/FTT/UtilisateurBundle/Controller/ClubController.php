<?php

namespace FTT\UtilisateurBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ClubController extends Controller {
   
    
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clubs = $em->getRepository("FTTAdminBundle:Club")->findAll();
        
        $LogosClubs = array();
        foreach ($clubs as $key => $entity) {
        $LogosClubs[$key] = base64_encode(stream_get_contents($entity->getLogoClub()));
        }
        
  return $this->render("FTTUtilisateurBundle:Club:listClub.html.twig", array("clubs" => $clubs,"LogosClubs"=> $LogosClubs));
   
    }
    
    




}