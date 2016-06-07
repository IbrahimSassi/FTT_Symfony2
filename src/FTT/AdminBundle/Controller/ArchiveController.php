<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\ActualiteNewsType;
use FTT\AdminBundle\Entity\ActualiteNews;
use Symfony\Component\HttpFoundation\Request;


class ArchiveController extends Controller
{
     public function listEventsarchiveAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll();        
        $actualites = $em->getRepository("FTTAdminBundle:ActualiteNews")->findAll();        
        
        $imagesActualite = array();
        foreach ($actualites as $key => $entity) {
                        
        $imagesActualite[$key] = base64_encode(stream_get_contents($entity->getImageActualite()));
        }
       

        return $this->render("FTTAdminBundle:Archive:archive.html.twig",
                array("evenements" => $evenements,
                    "actualites" => $actualites,
                    "images"=> $imagesActualite
                 
                    ));
        
    }
    
        public function listactualitéarchiveAction()
    {
        
        $em = $this->getDoctrine()->getManager();
              
        $actualites = $em->getRepository("FTTAdminBundle:ActualiteNews")->findAll();        
        
       

        return $this->render("FTTAdminBundle:Archive:archiveActualite.html.twig",
                array(
                    "actualites" => $actualites,
                    
                 
                    ));
        
    }
     public function AfficherMatchsArchiveAction()
    {
        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findAll();   
        
        $imagesJoueurs1 = array();
        foreach ($matchs as $key => $entity) {
        $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdJoueur1()->getImageJoueur()));
        }
        $imagesJoueurs2 = array();
        foreach ($matchs as $key => $entity) {
        $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdJoueur2()->getImageJoueur()));
        }
        
        return $this->render("FTTAdminBundle:Archive:archiveMatch.html.twig",
                array("matchs" => $matchs,
                    "imagesjoueurs1" => $imagesJoueurs1,
                    "imagesjoueurs2" => $imagesJoueurs2
                    ));
    }
   
    
}
