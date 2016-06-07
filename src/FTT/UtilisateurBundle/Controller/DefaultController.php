<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $actualites = $em->getRepository("FTTAdminBundle:ActualiteNews")->findAll();        
        $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll(); 
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll(); 
        $clubs = $em->getRepository("FTTAdminBundle:Club")->findAll(); 
        $complexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll(); 
        
        
        
        
        $imagesActualite = array();
        foreach ($actualites as $key => $entity) {
            
        $imagesActualite[$key] = base64_encode(stream_get_contents($entity->getImageActualite()));
        }
        
        
        $imagesJoueurs = array();
        foreach ($joueurs as $key => $entity) {
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
        }

        $imagesClubs = array();
        foreach ($clubs as $key => $entity) {
        $imagesClubs[$key] = base64_encode(stream_get_contents($entity->getLogoClub()));
        }
        
        $imagesComplexes = array();
        foreach ($complexes as $key => $entity) {
        $imagesComplexes[$key] = base64_encode(stream_get_contents($entity->getImageComplexe()));
        }
        
        return $this->render("FTTUtilisateurBundle:Default:accueil.html.twig",
                array("actualites" => $actualites,
                      "evenements" => $evenements,
                      "joueurs" => $joueurs,
                      "clubs" => $clubs,
                      "complexes" => $complexes,
                    "imagesActualite"=> $imagesActualite,
                    "imagesJoueur"=> $imagesJoueurs,
                    "imagesClub"=> $imagesClubs,
                    "imagesComplexes"=> $imagesComplexes
                    
                    ));
    }
    
    
    public function ErreurNotFoundAction() {
        return $this->render("FTTUtilisateurBundle:Default:error.html.twig",
                array());
        
    }
    
}
