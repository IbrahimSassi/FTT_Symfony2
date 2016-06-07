<?php

namespace FTT\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChoisirTestController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $test = $em->getRepository("FTTAdminBundle:JoueurATester")->findBy(array('etatAffectation' => 0 ));
        $request = $this->getRequest();
        
        $entities = $this->get('knp_paginator')->paginate(
                $test, $request->query->get('page', 1)/* page number */, 3/* limit per page */
        );
        
        return $this->render('FTTMedecinBundle:Test:ChoisirTest.html.twig', array('test' => $entities));
    }
    
    public function EnregisterAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $joueurATester = $em->getRepository("FTTAdminBundle:JoueurATester")->find($id);
        $request = $this->getRequest();
        $joueurATester->setEtatAffectation(1);
        $em->persist($joueurATester);
        $testAntiDopage = new \FTT\AdminBundle\Entity\TestAntiDopage();
        $testAntiDopage->setIdJoueurTester($joueurATester);
        $user = $this->get('security.context')->getToken()->getUser();
        $testAntiDopage->setIdMedecin($user);
        $em->persist($testAntiDopage);
        $em->flush();
        
        return $this->redirect($this->generateUrl('choisir_test'));

    }
    
    public function MesTestsAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser()->getId();
        $testAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->findMyTest($user,0);
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();
        $request = $this->getRequest();

        $entities = $this->get('knp_paginator')->paginate(
                $testAntiDopage, $request->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('FTTMedecinBundle:Test:MesTests.html.twig', array(
            'test' => $entities,
            "joueurs" => $joueurs));
    }
}
