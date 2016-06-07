<?php

namespace FTT\UtilisateurBundle\Controller;
use FTT\UtilisateurBundle\Entity\Joueur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class JoueurController extends Controller{
     public function listAction()
    {
          $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();
        
        
       
     $imagesJoueurs = array();
        foreach ($joueurs as $key => $entity) {
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
        }
        
  return $this->render("FTTUtilisateurBundle:Joueur:listJoueur.html.twig", array("joueurs" => $joueurs,"imagesJoueurs"=> $imagesJoueurs));
    
    }
    
 public function listClassementNationnalAction()
    {
          $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAllOrderByClassementNationnal();
        
        
       
     $imagesJoueurs = array();
        
     $imagesClubs = array();
     $imagestroisJoueurs = array();
     $j=0;
        foreach ($joueurs as $key => $entity) {
            
            if ($j<3) 
            {
              $imagestroisJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
              $j++;
            }
            
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
         $imagesClubs[$key] = base64_encode(stream_get_contents($entity->getIdClub()->getLogoClub()));
        }
        
  return $this->render("FTTUtilisateurBundle:Joueur:classementNationnal.html.twig",
          array("joueurs" => $joueurs,
              "imagesJoueurs"=> $imagesJoueurs,
              "imagestroisJoueurs"=> $imagestroisJoueurs,
              "imagesClubs"=>$imagesClubs));
    
    }

 public function listClassementInternationalAction()
    {
          $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAllOrderByClassementInternationnal();
        
        
       
 $imagesJoueurs = array();
     $imagesClubs = array();
     $imagestroisJoueurs = array();
     $j=0;
        foreach ($joueurs as $key => $entity) {
            
            if ($j<3) 
            {
              $imagestroisJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
              $j++;
            }
            
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
         $imagesClubs[$key] = base64_encode(stream_get_contents($entity->getIdClub()->getLogoClub()));       }
        
  return $this->render("FTTUtilisateurBundle:Joueur:classementInternationnal.html.twig",  array("joueurs" => $joueurs,
              "imagesJoueurs"=> $imagesJoueurs,
              "imagestroisJoueurs"=> $imagestroisJoueurs,
              "imagesClubs"=>$imagesClubs));
    
    }
}
