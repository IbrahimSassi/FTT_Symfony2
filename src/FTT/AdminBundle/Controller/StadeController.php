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

namespace FTT\AdminBundle\Controller;

use FTT\AdminBundle\Form\StadeNewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Entity\Stade;

class StadeController extends Controller {

    function AjouterAction() {
        $stade = new Stade();

        $Form = $this->createForm(new StadeNewsType(), $stade);

        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stade);
            $em->flush();
            return $this->redirect($this->generateUrl('list_stade'));
        }

        return $this->render("FTTAdminBundle:Stade:AjouterStade.html.twig", array('Form' => $Form->createView()));
    }

    function ModifierAction($id) {

        $em = $this->getDoctrine()->getManager();
        $stade = $em->getRepository('FTTAdminBundle:Stade')->find($id);
        $Form = $this->createForm(new StadeNewsType(), $stade);

        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {

            $em->persist($stade);
            $em->flush();
            return $this->redirect($this->generateUrl('list_stade'));
        }
        return $this->render("FTTAdminBundle:Stade:ModifierStade.html.twig", array('Form' => $Form->createView()));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $stade = $em->getRepository('FTTAdminBundle:Stade')->find($id);
        $em->remove($stade);
        $em->flush();
        return $this->redirect($this->generateUrl('list_stade'));
    }

    function listAction() {

        $em = $this->getDoctrine()->getManager();
        $stade = $em->getRepository("FTTAdminBundle:Stade")->findAll();



        return $this->render("FTTAdminBundle:Stade:ListStade.html.twig", array("stades" => $stade
        ));
    }

}
