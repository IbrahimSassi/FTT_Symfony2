<?php

namespace FTT\AdminBundle\Controller;

use FTT\AdminBundle\Entity\Joueur;
use FTT\AdminBundle\Form\JoueurmodifierType;
use FTT\AdminBundle\Form\JoueurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JoueurController extends Controller {

    //put your code here


    public function AfficherdetailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository("FTTAdminBundle:Joueur")->find($id);

        $images = array();
        $images = base64_encode(stream_get_contents($joueur->getImagejoueur()));


        return $this->render("FTTAdminBundle:Joueur:detailJoueur.html.twig", array("joueur" => $joueur, "images" => $images));
    }

    public function listAction() {
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();



        $imagesJoueurs = array();
        foreach ($joueurs as $key => $entity) {
            $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
        }

        return $this->render("FTTAdminBundle:Joueur:listJoueur.html.twig", array("joueurs" => $joueurs, "imagesJoueurs" => $imagesJoueurs));
    }

    public function ajouterAction() {


        $Joueur = new Joueur();
        $Form = $this->createForm(new JoueurType(), $Joueur);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $stream = fopen($Joueur->getImageJoueur(), 'rb');
            $Joueur->setImageJoueur(stream_get_contents($stream));
            $em = $this->getDoctrine()->getManager();
            $em->persist($Joueur);
            $em->flush();
            return $this->redirect($this->generateUrl('list_joueur'));
        }

        return $this->render("FTTAdminBundle:Joueur:ajouterJoueur.html.twig", array('Joueur' => $Joueur, 'Form' => $Form->createView()));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository('FTTAdminBundle:Joueur')->find($id);

        $em->remove($joueur);
        $em->flush();
        return $this->redirect($this->generateUrl('list_joueur'));
    }

    public function modifierAction($id, $idClub) {
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository('FTTAdminBundle:Joueur')->find($id);
        
        //$club=$em->getRepository('FTTAdminBundle:Club')->find($idClub);
        $Form = $this->createForm(new JoueurmodifierType(), $joueur);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isSubmitted()) {

            $stream = fopen($joueur->getImageJoueur(), 'rb');
            $joueur->setImageJoueur(stream_get_contents($stream));


            //$joueur->setIdClub($club);
            $em->persist($joueur);
            $em->flush();


            return $this->redirect($this->generateUrl('list_joueur'));
        }


        return $this->render("FTTAdminBundle:Joueur:modifierJoueur.html.twig", array('Form' => $Form->createView()));
    }

}
