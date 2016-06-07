<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\ActualiteNewsType;
use FTT\AdminBundle\Entity\ActualiteNews;
use Symfony\Component\HttpFoundation\Request;

class ActualiteController extends Controller {

    public function AfficherArticleAction($id) {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository("FTTAdminBundle:ActualiteNews")->find($id);

        $images = array();
        $images = base64_encode(stream_get_contents($article->getImageActualite()));

        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));

        return $this->render("FTTAdminBundle:Actualite:article.html.twig", array("article" => $article,
                    "images" => $images,
                    "ProfilPic" => $image
        ));
    }

    public function listAction() {

        $em = $this->getDoctrine()->getManager();
        $actualites = $em->getRepository("FTTAdminBundle:ActualiteNews")->findAll();
        $request = $this->getRequest();

        $imagesActualite = array();
        foreach ($actualites as $key => $entity) {

            $imagesActualite[$key] = base64_encode(stream_get_contents($entity->getImageActualite()));
        }
        
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));

        $entities = $this->get('knp_paginator')->paginate(
                $actualites, $request->query->get('page', 1)/* page number */, 3/* limit per page */
        );


        return $this->render("FTTAdminBundle:Actualite:listActualite.html.twig", array("actualites" => $entities,
                    "images" => $imagesActualite,
            "ProfilPic" => $image
        ));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FTTAdminBundle:ActualiteNews')->find($id);
        $em->remove($actualite);
        $em->flush();
        return $this->redirect($this->generateUrl('list_actualite'));
    }

    public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FTTAdminBundle:ActualiteNews')->find($id);
        $Form = $this->createForm(new ActualiteNewsType(), $actualite);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));

        
        if ($Form->isSubmitted()) {

            $stream = fopen($actualite->getImageActualite(), 'rb');
            $actualite->setImageActualite(stream_get_contents($stream));
            $em->persist($actualite);
            $em->flush();
            return $this->redirect($this->generateUrl('list_actualite'));
        }

        return $this->render("FTTAdminBundle:Actualite:modifierActualite.html.twig",
                array('Form' => $Form->createView(),
                    "ProfilPic" => $image
                ));
    }

    public function ajouterAction() {
        $em = $this->getDoctrine()->getManager();
        $Actualite = new ActualiteNews();
        $Form = $this->createForm(new ActualiteNewsType(), $Actualite);
        $request = $this->get('request_stack')->getCurrentRequest();

        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));


        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $stream = fopen($Actualite->getImageActualite(), 'rb');
            $Actualite->setImageActualite(stream_get_contents($stream));
            $Actualite->setDateActualite(new \DateTime());
            $user = $this->container->get('security.context')->getToken()->getUser();
            $Actualite->setIdAdmin($user);
            $em->persist($Actualite);
            $em->flush();
            return $this->redirect($this->generateUrl('list_actualite'));
        }
        return $this->render("FTTAdminBundle:Actualite:ajouterActualite.html.twig", 
                array('Form' => $Form->createView(),
                    "ProfilPic" => $image
        ));
    }

}
