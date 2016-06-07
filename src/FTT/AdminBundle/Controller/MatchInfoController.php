<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\MatchInfoType;
use FTT\AdminBundle\Entity\MatchInfo;
use Symfony\Component\HttpFoundation\Request;

class MatchInfoController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findAll();

        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));

        return $this->render("FTTAdminBundle:MatchInfo:listMatchsInfo.html.twig", array(
                    "matchs" => $matchs,
                    "ProfilPic" => $image
        ));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository('FTTAdminBundle:MatchInfo')->find($id);
        $em->remove($match);
        $em->flush();
        return $this->redirect($this->generateUrl('list_matchsInfo'));
    }

    public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository('FTTAdminBundle:MatchInfo')->find($id);
        $Form = $this->createForm(new MatchInfoType(), $match);
        $request = $this->get('request_stack')->getCurrentRequest();

        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));



        $Form->handleRequest($request);

        if ($Form->isSubmitted()) {


            $error = '';
            $planningArbitreChoisi = array();
            $planningArbitreChoisi = $em->getRepository('FTTAdminBundle:PlanningArbitre')
                    ->findBy(array('idArbitre' => $match->getIdArbitre(), 'dateDispo' => $match->getDateMatch()));

            $disponibiliteStade = array();
            $disponibiliteStade = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idStade' => $match->getIdStade(), 'dateMatch' => $match->getDateMatch()));

            $disponibiliteJoueur1 = array();
            $disponibiliteJoueur1 = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idJoueur1' => $match->getIdJoueur1(), 'dateMatch' => $match->getDateMatch()));

            $disponibiliteJoueur2 = array();
            $disponibiliteJoueur2 = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idJoueur2' => $match->getIdJoueur2(), 'dateMatch' => $match->getDateMatch()));


            if ($match->getIdJoueur1() == $match->getIdJoueur2() || $match->getIdJoueur1() == $match->getIdJoueur3() || $match->getIdJoueur1() == $match->getIdJoueur4() || $match->getIdJoueur2() == $match->getIdJoueur3())
                $error = 'memeJoueur';
            elseif (($match->getTypeMatch() == 'international') && (($match->getIdArbitre()->getCategorieArbitre() == 'national') || ($match->getIdArbitre()->getCategorieArbitre() == 'amateur'))) {
                $error = 'errorarbitre';
            } elseif (($match->getTypeMatch() == 'national') && ($match->getIdArbitre()->getCategorieArbitre() == 'amateur')) {
                $error = 'errorarbitre';
            } elseif ($match->getIdEvenement()->getTypeEvenement() != $match->getTypeMatch()) {
                $error = 'errorEvenement';
            } elseif (sizeof($planningArbitreChoisi) == 0) {
                $error = 'errorDisponibilite';
            } elseif (sizeof($disponibiliteStade) != 0) {
                $error = 'errorDisponibiliteStade';
            } elseif (sizeof($disponibiliteJoueur1) != 0) {
                $error = 'errorDisponibiliteJoueur1';
            } elseif (sizeof($disponibiliteJoueur2) != 0) {
                $error = 'errorDisponibiliteJoueur2';
            }






            if ($error == '') {
                $em->persist($match);
                $em->flush();
                return $this->redirect($this->generateUrl('list_matchsInfo'));
            } else {
                return $this->render("FTTAdminBundle:MatchInfo:modifierMatchInfo.html.twig", array('Form' => $Form->createView(),
                            "ProfilPic" => $image,
                            'msg' => $error,
                ));
            }
        }

        return $this->render("FTTAdminBundle:MatchInfo:modifierMatchInfo.html.twig", array('Form' => $Form->createView(),
                    "ProfilPic" => $image,
            'msg' => '',));
    }

    public function ajouterAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));


        $em = $this->getDoctrine()->getManager();
        $match = new MatchInfo();
        $Form = $this->createForm(new MatchInfoType(), $match);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {

            $error = '';
            $planningArbitreChoisi = array();
            $planningArbitreChoisi = $em->getRepository('FTTAdminBundle:PlanningArbitre')
                    ->findBy(array('idArbitre' => $match->getIdArbitre(), 'dateDispo' => $match->getDateMatch()));

            $disponibiliteStade = array();
            $disponibiliteStade = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idStade' => $match->getIdStade(), 'dateMatch' => $match->getDateMatch()));

            $disponibiliteJoueur1 = array();
            $disponibiliteJoueur1 = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idJoueur1' => $match->getIdJoueur1(), 'dateMatch' => $match->getDateMatch()));

            $disponibiliteJoueur2 = array();
            $disponibiliteJoueur2 = $em->getRepository('FTTAdminBundle:MatchInfo')
                    ->findBy(array('idJoueur2' => $match->getIdJoueur2(), 'dateMatch' => $match->getDateMatch()));


            if ($match->getIdJoueur1() == $match->getIdJoueur2() || $match->getIdJoueur1() == $match->getIdJoueur3() || $match->getIdJoueur1() == $match->getIdJoueur4() || $match->getIdJoueur2() == $match->getIdJoueur3())
                $error = 'memeJoueur';
            elseif (($match->getTypeMatch() == 'international') && (($match->getIdArbitre()->getCategorieArbitre() == 'national') || ($match->getIdArbitre()->getCategorieArbitre() == 'amateur'))) {
                $error = 'errorarbitre';
            } elseif (($match->getTypeMatch() == 'national') && ($match->getIdArbitre()->getCategorieArbitre() == 'amateur')) {
                $error = 'errorarbitre';
            } elseif ($match->getIdEvenement()->getTypeEvenement() != $match->getTypeMatch()) {
                $error = 'errorEvenement';
            } elseif (sizeof($planningArbitreChoisi) == 0) {
                $error = 'errorDisponibilite';
            } elseif (sizeof($disponibiliteStade) != 0) {
                $error = 'errorDisponibiliteStade';
            } elseif (sizeof($disponibiliteJoueur1) != 0) {
                $error = 'errorDisponibiliteJoueur1';
            } elseif (sizeof($disponibiliteJoueur2) != 0) {
                $error = 'errorDisponibiliteJoueur2';
            }





            if ($error == '') {
                $em->persist($match);
                $em->flush();
                return $this->redirect($this->generateUrl('list_matchsInfo'));
            } else {

                return $this->render("FTTAdminBundle:MatchInfo:ajouterMatchInfo.html.twig", array('Form' => $Form->createView(),
                            'msg' => $error,
                            "ProfilPic" => $image));
            }
        }

        return $this->render("FTTAdminBundle:MatchInfo:ajouterMatchInfo.html.twig", array('Form' => $Form->createView(),
                    'msg' => '',
                    "ProfilPic" => $image));
    }

    public function listMatchSansScoreAction() {

        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findMatchWithoutResult();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));

        return $this->render("FTTAdminBundle:MatchInfo:attribuerScoreList.html.twig", array("matchs" => $matchs,
                    "ProfilPic" => $image
        ));
    }

}
