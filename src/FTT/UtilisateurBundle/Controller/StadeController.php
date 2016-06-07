<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StadeController
 *
 * @author MARWEN HLEILI
 */

namespace FTT\UtilisateurBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\UtilisateurBundle\Entity\Stade;
use Symfony\Component\HttpFoundation\Request;

class StadeController extends Controller {

   

    function listAction() {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $liststades = $em->getRepository("FTTAdminBundle:Stade")->findAll();
        
//         $stades  = $this->get('knp_paginator')->paginate(
//        $liststades,
//        $request->query->get('page', 1)/*page number*/,
//        1/*limit per page*/
//            );

          return $this->render("FTTUtilisateurBundle:Stade:Informationstade.html.twig", array("stades" => $liststades
        ));
    }
    function recherchestadeAction($lettre) {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $liststades = $em->getRepository("FTTAdminBundle:Stade")->findByS($lettre);

//      $stades  = $this->get('knp_paginator')->paginate(
//        $liststades,
//        $request->query->get('page', 1)/*page number*/,
//        1/*limit per page*/
//            );
        return $this->render("FTTUtilisateurBundle:Stade:Informationstade.html.twig", array("stades" => $liststades
        ));
    }

  
}
