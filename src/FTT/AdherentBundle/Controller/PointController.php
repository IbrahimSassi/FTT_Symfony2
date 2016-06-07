<?php

namespace FTT\AdherentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PointController extends Controller {

    public function affichageAction() {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $request = $this->getRequest();
        $validation = 'rien';
        if ($request->getMethod() == "POST") {
            $solde = $this->get('request')->get('solde');
            if ($solde > $userManager->getSoldeAdherent()) {
                $validation = 'pasDeSolde';
                return $this->render('FTTAdherentBundle:Point:PointAdherent.html.twig', array("msg" => $validation));
            }
            $userManager->setSoldeAdherent($userManager->getSoldeAdherent() - $solde);
            $userManager->setPointsAdherent($userManager->getPointsAdherent() + $solde);
            $em->persist($userManager);
            $em->flush();
            return $this->redirect($this->generateUrl('point_adherent'));
        }
        return $this->render('FTTAdherentBundle:Point:PointAdherent.html.twig', array("msg" => $validation));
    }

    public function venteAction() {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $request = $this->getRequest();
        $validation = 'rien';

        if ($request->getMethod() == "POST") {
            $point = $this->get('request')->get('point');
            if ($point > $userManager->getPointsAdherent()) {
                $validation = 'pasDePoint';
                return $this->render('FTTAdherentBundle:Point:PointAdherent.html.twig', array("msg" => $validation));
            }
            $userManager->setSoldeAdherent($userManager->getSoldeAdherent() + $point);
            $userManager->setPointsAdherent($userManager->getPointsAdherent() - $point);
            $em->persist($userManager);
            $em->flush();
            return $this->redirect($this->generateUrl('point_adherent'));
        }
        return $this->render('FTTAdherentBundle:Point:PointAdherent.html.twig', array("msg" => $validation));
    }

}
