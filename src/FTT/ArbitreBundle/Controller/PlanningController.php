<?php

namespace FTT\ArbitreBundle\Controller;

use FTT\AdminBundle\Entity\PlanningArbitre;
use FTT\AdminBundle\Entity\User;
use FTT\ArbitreBundle\Form\PlanningArbitreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanningController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();
        $plannings = $em->getRepository("FTTAdminBundle:PlanningArbitre")->findAll();


        return $this->render("FTTArbitreBundle:PlanningArbitre:listPlanningArbitre.html.twig", array("plannings" => $plannings
        ));
    }

    public function ajouterAction($id) {

        $planning = new PlanningArbitre();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $planning->setIdArbitre($CurrUser);
        $Form = $this->createForm(new PlanningArbitreType(), $planning);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {

            $em->persist($planning);
            $em->flush();
            return $this->redirect($this->generateUrl('list_planning'));
        }

        return $this->render("FTTArbitreBundle:PlanningArbitre:ajouterPlanningArbitre.html.twig", array('Form' => $Form->createView()));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $planning = $em->getRepository('FTTAdminBundle:PlanningArbitre')->find($id);
        $em->remove($planning);
        $em->flush();
        return $this->redirect($this->generateUrl('list_planning'));
    }

    public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $planning = new PlanningArbitre();
        $planning = $em->getRepository('FTTAdminBundle:PlanningArbitre')->find($id);
        $Form = $this->createForm(new PlanningArbitreType(), $planning);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($planning);
            $em->flush();
            return $this->redirect($this->generateUrl('list_planning'));
        }

        return $this->render("FTTArbitreBundle:PlanningArbitre:modifierPlanningArbitre.html.twig", array('Form' => $Form->createView()));
    }

}
