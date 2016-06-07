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

namespace FTT\AdminBundle\Controller;

use FTT\AdminBundle\Form\ComplexeNewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Entity\Complexe;
use Symfony\Component\HttpFoundation\Request;

class ComplexeController extends Controller {

    function AjouterAction() {



        $Comp = new Complexe();
        $Form = $this->createForm(new ComplexeNewsType(), $Comp);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $stream = fopen($Comp->getImageComplexe(), 'rb');
            $Comp->setImageComplexe(stream_get_contents($stream));
            $em->persist($Comp);
            $em->flush();
            return $this->redirect($this->generateUrl('list_complexe'));
        }

        return $this->render("FTTAdminBundle:Complexe:AjouterComplexe.html.twig", array('Form' => $Form->createView()));
    }

    function ModifierAction($id) {

        $em = $this->getDoctrine()->getManager();
        $complexe = $em->getRepository('FTTAdminBundle:Complexe')->find($id);
        $Form = $this->createForm(new ComplexeNewsType(), $complexe);
        $latitude = $complexe->getLatitude();
        $longitude = $complexe->getLongitude();
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $stream = fopen($complexe->getImageComplexe(), 'rb');
            $complexe->setImageComplexe(stream_get_contents($stream));

            $em->persist($complexe);
            $em->flush();
            return $this->redirect($this->generateUrl('list_complexe'));
        }
        return $this->render("FTTAdminBundle:Complexe:ModifierComplexe.html.twig", array('Form' => $Form->createView(), 'latitude' => $latitude, 'longitude' => $longitude));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $complexe = $em->getRepository('FTTAdminBundle:Complexe')->find($id);
        $em->remove($complexe);
        $em->flush();
        return $this->redirect($this->generateUrl('list_complexe'));
    }

    function listAction() {

        $em = $this->getDoctrine()->getManager();
        $complexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll();

       
        return $this->render("FTTAdminBundle:Complexe:ListComplexe.html.twig", array("complexes" => $complexes
        ));
    }

    function chooseAction() {

        return $this->render("FTTAdminBundle:Complexe:basechoose.html.twig")
        ;
    }

    function lieuxAction($id) {

        $em = $this->getDoctrine()->getManager();
        $complexe = $em->getRepository('FTTAdminBundle:Complexe')->find($id);

        $latitude = $complexe->getLatitude();

        $longitude = $complexe->getLongitude();
        return $this->render("FTTAdminBundle:Complexe:mapinterface.html.twig", array('latitude' => $latitude, 'longitude' => $longitude));
    }

    function listlieuxAction() {

        $em = $this->getDoctrine()->getManager();
        $complexes = $em->getRepository("FTTAdminBundle:Complexe")->findAll();
        return $this->render("FTTAdminBundle:Complexe:consulterlieux.html.twig", array('complexes' => $complexes));
    }

}
