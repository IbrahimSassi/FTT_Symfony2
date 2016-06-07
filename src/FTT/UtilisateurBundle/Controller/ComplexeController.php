<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComplexeController
 *
 * @author MARWEN HLEILI
 */

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Entity\Complexe;
use Symfony\Component\HttpFoundation\Request;

class ComplexeController extends Controller {

    function listAction() {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $listcomplexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll();

        $imagesComplexe = array();
        foreach ($listcomplexes as $key => $entity) {

            $imagesComplexe[$key] = base64_encode(stream_get_contents($entity->getImageComplexe()));
        }
//        $complexes  = $this->get('knp_paginator')->paginate(
//        $listcomplexes,
//        $request->query->get('page', 1)/*page number*/,
//        2/*limit per page*/
//            );
        
        return $this->render("FTTUtilisateurBundle:Complexe:Informationcomplexe.html.twig",
                array("complexes" => $listcomplexes,
                    "images" => $imagesComplexe
        ));
    }

    function RechercheParLettreAction($lettre) {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $listcomplexes = $em->getRepository("FTTAdminBundle:Complexe")->findByC($lettre);

        $imagesComplexe = array();
        foreach ($listcomplexes as $key => $entity) {

            $imagesComplexe[$key] = base64_encode(stream_get_contents($entity->getImageComplexe()));
        }
//        $complexes  = $this->get('knp_paginator')->paginate(
//        $listcomplexes,
//        $request->query->get('page', 1)/*page number*/,
//        1/*limit per page*/
//            );
        return $this->render("FTTUtilisateurBundle:Complexe:Informationcomplexe.html.twig",
                array("complexes" => $listcomplexes,
                    "images" => $imagesComplexe
        ));
    }

//    function popAction() {
//
//        $em = $this->getDoctrine()->getManager();
//        $complexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll();
//        return $this->render("FTTUtilisateurBundle:Complexe:Popupmap.html.twig",array('complexes' => $complexes));
//    }
    
     function lieuxAction() {

        $em = $this->getDoctrine()->getManager();
        $complexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll();
        return $this->render("FTTUtilisateurBundle:Complexe:popup.html.twig",array("complexes"=>$complexes));
    }
}
