<?php

namespace FTT\UtilisateurBundle\Controller;

use FTT\UtilisateurBundle\RechercheEventsForm;
use FTT\AdminBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller {

    public function AfficherEventsAction() {
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll();

        return $this->render("FTTUtilisateurBundle:Evenement:evenement.html.twig", array("evenements" => $evenements,
        ));
    }

    public function rechercheeventsAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {

           
            $nomEvenement = $request->get('nomEvenement');
          
            $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findBy(array('nomEvenement' => $nomEvenement));
            return $this->render("FTTUtilisateurBundle:Evenement:evenement.html.twig", array('evenements' => $evenements,));
            
               
        } $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll();
        return $this->render("FTTUtilisateurBundle:Evenement:evenement.html.twig", array('evenements' => $evenements));

    }

    public function rechercheevents2Action() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {

            $dateDebut = $request->get('dateDebut');
            $dateFin = $request->get('dateFin');
            $typeEvenement = $request->get('typeEvenement');
            $evenements  = $em->getRepository("FTTAdminBundle:Evenement")->findBy(array('dateDebut' => $dateDebut,'dateFin' => $dateFin,'typeEvenement' => $typeEvenement));
            return $this->render("FTTUtilisateurBundle:Evenement:evenement.html.twig", array('evenements' => $evenements,));
            
        } 
         $evenements = $em->getRepository("FTTAdminBundle:Evenement")->findAll();
        return $this->render("FTTUtilisateurBundle:Evenement:evenement.html.twig", array('evenements' => $evenements));
    }
    
}
