<?php

namespace FTT\AdherentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('FTTAdherentBundle:Default:index.html.twig', array('name' => $name));
    }

    public function succesAction() {
        $request = $this->getRequest();

        $cookies = $request->cookies;
        $amount = $cookies->get('montant');

        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $amount = $amount / 2;
        $TotAMout = $CurrUser->getSoldeAdherent() + $amount;

        $em->getRepository("FTTAdminBundle:User")->updatesolde($CurrUser, $TotAMout);


        return $this->render('FTTAdherentBundle:Default:succesrecharge.html.twig', array('a' => $amount));
    }

    public function echecAction() {
        return $this->render('FTTAdherentBundle:Default:echecrecharge.html.twig', array());
    }

}
