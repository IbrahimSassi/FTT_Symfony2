<?php

namespace FTT\ArbitreBundle\Controller;

use FTT\AdminBundle\Entity\ResultatMatch;
use FTT\AdminBundle\Entity\User;
use FTT\ArbitreBundle\Form\ResultatMatchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\ArbitreBundle\Form\PlanningArbitreType;
use FTT\AdminBundle\Entity\PlanningArbitre;

class ResultatMatchController extends Controller {
    
     public function listAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findBy(array("idArbitre"=>$id));      
                

        return $this->render("FTTArbitreBundle:ResultatMatch:listResultatMatch.html.twig",
                array("matchs" => $matchs
                    ));
    }
   /*  public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $compteRendus = $em->getRepository('FTTAdminBundle:MatchInfo')->find($id);
        $Form = $this->createForm(new MatchInfoType(), $compteRendus);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($compteRendus);
            $em->flush();
            return $this->redirect($this->generateUrl('list_matchsInfo'));
        }
        
        return $this->render("FTTArbitreBundle:ResultatMatch:modifierResultatMatch.html.twig", array('Form' => $Form->createView()));
    }*/
      public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $compterendu= new ResultatMatch();
        $compterendu = $em->getRepository('FTTAdminBundle:ResultatMatch')->findOneByIdMatch($id);
        $Form = $this->createForm(new ResultatMatchType(), $compterendu);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($compterendu);
            $em->flush();
            //return $this->redirect($this->generateUrl('list_ResultatMatch',$id);
        }
        
        return $this->render("FTTArbitreBundle:ResultatMatch:modifierCompte_rendu.html.twig", array('Form' => $Form->createView()));
    }
}
