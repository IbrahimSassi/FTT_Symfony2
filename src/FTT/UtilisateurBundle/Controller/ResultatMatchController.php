<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResultatMatchController extends Controller {

    public function RencontresDirectesAction($idJoueur1, $idJoueur2) {
        $em = $this->getDoctrine()->getManager();
        //recuperer le nb de victoires pr chaque joueur (il suffit de faire tourner les parametres)
        $request = $this->get('request_stack')->getCurrentRequest();
        $entity = new \FTT\AdminBundle\Entity\MatchInfo();
        $form = $this->createFormBuilder($entity)
                ->add('idJoueur1', null, array('attr' => array("class" => "form-control"
                    ,'style'=>"color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'")))
                ->add('idJoueur2', null, array('attr' => array("class" => "form-control",
                     'style'=>"color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'")))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $NbVictoiresJoueur1 = $em->getRepository("FTTAdminBundle:ResultatMatch")->CountNbWinsDirectly($entity->getIdJoueur1()->getId(), $entity->getIdJoueur2()->getId());
            $NbVictoiresJoueur2 = $em->getRepository("FTTAdminBundle:ResultatMatch")->CountNbWinsDirectly($entity->getIdJoueur2()->getId(), $entity->getIdJoueur1()->getId());
            //recuperer ls matchs entre les 2 jrs
            $rencontres = $em->getRepository("FTTAdminBundle:ResultatMatch")->findMatchBetweenSpecificPlayers($entity->getIdJoueur1()->getId(), $entity->getIdJoueur2()->getId());
            $joueur1 = $em->getRepository("FTTAdminBundle:Joueur")->find($entity->getIdJoueur1()->getId());
            $joueur2 = $em->getRepository("FTTAdminBundle:Joueur")->find($entity->getIdJoueur2()->getId());
            $imagejoueur1 = base64_encode(stream_get_contents($joueur1->getImageJoueur()));
            $imagejoueur2 = base64_encode(stream_get_contents($joueur2->getImageJoueur()));

            return $this->render("FTTUtilisateurBundle:Match:rencontresDirectes.html.twig", array("matchs" => $rencontres,
                        "NbVictoiresJoueur1" => $NbVictoiresJoueur1,
                        "NbVictoiresJoueur2" => $NbVictoiresJoueur2,
                        "imageJoueur1" => $imagejoueur1,
                        "imageJoueur2" => $imagejoueur2,
                        "joueur1" => $joueur1,
                        "joueur2" => $joueur2,
                        'form' => $form->createView(),
            ));
        }


        $NbVictoiresJoueur1 = $em->getRepository("FTTAdminBundle:ResultatMatch")->CountNbWinsDirectly($idJoueur1, $idJoueur2);
        $NbVictoiresJoueur2 = $em->getRepository("FTTAdminBundle:ResultatMatch")->CountNbWinsDirectly($idJoueur2, $idJoueur1);
        //recuperer ls matchs entre les 2 jrs
        $rencontres = $em->getRepository("FTTAdminBundle:ResultatMatch")->findMatchBetweenSpecificPlayers($idJoueur1, $idJoueur2);
        $joueur1 = $em->getRepository("FTTAdminBundle:Joueur")->find($idJoueur1);
        $joueur2 = $em->getRepository("FTTAdminBundle:Joueur")->find($idJoueur2);
        $imagejoueur1 = base64_encode(stream_get_contents($joueur1->getImageJoueur()));
        $imagejoueur2 = base64_encode(stream_get_contents($joueur2->getImageJoueur()));

        return $this->render("FTTUtilisateurBundle:Match:rencontresDirectes.html.twig", array("matchs" => $rencontres,
                    "NbVictoiresJoueur1" => $NbVictoiresJoueur1,
                    "NbVictoiresJoueur2" => $NbVictoiresJoueur2,
                    "imageJoueur1" => $imagejoueur1,
                    "imageJoueur2" => $imagejoueur2,
                    "joueur1" => $joueur1,
                    "joueur2" => $joueur2,
                    'form' => $form->createView(),
        ));
    }

    public function AfficherResultatAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request_stack')->getCurrentRequest();

        $entity = new \FTT\AdminBundle\Entity\MatchInfo();
        $form = $this->createFormBuilder($entity)
                ->add('idEvenement', null, array('attr' => array("class" => "form-control",
                    'style'=>"color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'")))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $matchs = $em->getRepository("FTTAdminBundle:ResultatMatch")->findResultatByEvent($entity->getIdEvenement());
            $imagesJoueurs1 = array();
            $imagesJoueurs2 = array();

            foreach ($matchs as $key => $entity) {
                $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdMatch()->getIdJoueur1()->getImageJoueur()));
                $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdMatch()->getIdJoueur2()->getImageJoueur()));
            }


            $entities = $this->get('knp_paginator')->paginate(
                    $matchs, $request->query->get('page', 1)/* page number */, 5/* limit per page */
            );



            return $this->render("FTTUtilisateurBundle:Match:matchResultats.html.twig", array("matchs" => $entities,
                        "imagesjoueurs1" => $imagesJoueurs1,
                        "imagesjoueurs2" => $imagesJoueurs2,
                        'form' => $form->createView(),
            ));
        }



        $matchs = $em->getRepository("FTTAdminBundle:ResultatMatch")->findAll();

        $imagesJoueurs1 = array();
        $imagesJoueurs2 = array();

        foreach ($matchs as $key => $entity) {
            $imagesJoueurs1[$key] = base64_encode(stream_get_contents($entity->getIdMatch()->getIdJoueur1()->getImageJoueur()));
            $imagesJoueurs2[$key] = base64_encode(stream_get_contents($entity->getIdMatch()->getIdJoueur2()->getImageJoueur()));
        }


        $entities = $this->get('knp_paginator')->paginate(
                $matchs, $request->query->get('page', 1)/* page number */, 5/* limit per page */
        );



        return $this->render("FTTUtilisateurBundle:Match:matchResultats.html.twig", array("matchs" => $entities,
                    "imagesjoueurs1" => $imagesJoueurs1,
                    "imagesjoueurs2" => $imagesJoueurs2,
                    'form' => $form->createView(),
        ));
    }

}
