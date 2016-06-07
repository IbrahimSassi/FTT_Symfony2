<?php

namespace FTT\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResultatTestController extends Controller {

    public function PublierTestsAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser()->getId();
        $testAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->findMyTest($user, 0);
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();

        $request = $this->getRequest();

        $entities = $this->get('knp_paginator')->paginate(
                $testAntiDopage, $request->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('FTTMedecinBundle:CompteRendu:PublierResultat.html.twig', array('test' => $entities,
            'joueurs' => $joueurs));
    }

    public function AjouterTestAction($id) {

        $em = $this->getDoctrine()->getManager();
        $testAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->find($id);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $resultat = $this->get('request')->get('resultatTest');
            $description = $this->get('request')->get('description');
            $testAntiDopage->setDescription($description);
            $testAntiDopage->setResultat($resultat);
            $em->persist($testAntiDopage);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('publier_compte_rendu'));
    }

    public function MesComptesRendusAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser()->getId();
        $testAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->findMyCompteRendu($user,0);
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();
        $request = $this->getRequest();

        $entities = $this->get('knp_paginator')->paginate(
                $testAntiDopage, $request->query->get('page', 1)/* page number */, 3/* limit per page */
        );
       

        return $this->render('FTTMedecinBundle:CompteRendu:MesComptesRendus.html.twig', array('test' => $entities,
            'joueurs'=>$joueurs));
    }

    public function modifierCompteRenduAction($id) {

        $em = $this->getDoctrine()->getManager();
        $testAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->find($id);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $resultat = $this->get('request')->get('resultatTest');
            $description = $this->get('request')->get('description');
            $testAntiDopage->setDescription($description);
            $testAntiDopage->setResultat($resultat);
            $em->persist($testAntiDopage);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('modifier_compte_rendu'));
    }
}
