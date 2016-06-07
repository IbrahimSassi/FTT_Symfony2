<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArbitreController extends Controller {

    public function AfficherAribtreAction() {
        $em = $this->getDoctrine()->getManager();
        $arbitre = $em->getRepository("FTTAdminBundle:CarriereArbitre")->findAll();
        $request = $this->getRequest();
        $imagesArbitre = array();

        foreach ($arbitre as $key => $entity) {
            $imagesArbitre[$key] = base64_encode(stream_get_contents($entity->getIdArbitre()->getImageUser()));
        }


        $entities = $this->get('knp_paginator')->paginate(
                $arbitre, $request->query->get('page', 1)/* page number */, 6/* limit per page */
        );


        return $this->render("FTTUtilisateurBundle:Arbitre:Arbitre.html.twig", array("arbitre" => $entities,
                    "imagesArbitre" => $imagesArbitre
        ));
    }
}