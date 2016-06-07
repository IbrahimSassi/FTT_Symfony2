<?php

namespace FTT\ArbitreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FTT\AdminBundle\Entity\Candidature;
use FTT\AdminBundle\Entity\SessionArbitre;
use Symfony\Component\HttpFoundation\Request;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionArbitreController
 *
 * @author ons
 */
class SessionArbitreController extends Controller {
    //put your code here
    
    
    public function listsessionsAction()
    {
       
        
        $em = $this->getDoctrine()->getManager();
        $sessionarbitres = $em->getRepository("FTTAdminBundle:SessionArbitre")->findAll();        
        
       

        return $this->render("FTTArbitreBundle:SessionArbitre:listesession.html.twig",
                array("sessionarbitres" => $sessionarbitres,
                 
                    ));
    }
     public function modifierSessionsAction($id) {
     $em = $this->getDoctrine()->getManager();
       $sessionarbitres  = $em->getRepository("FTTAdminBundle:SessionArbitre")->find($id);
      $sessionarbitres -> setNbArbitreSession($sessionarbitres -> getNbArbitreSession()-1);
      $em->flush();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $candidature = new Candidature();
        $candidature->setIdArbitre($CurrUser);
        $candidature ->setIdSession($sessionarbitres);
        $em->persist($candidature);
        $em->flush();
           return $this->redirect($this->generateUrl('list_session'));
    
       }
       
        
    
}
