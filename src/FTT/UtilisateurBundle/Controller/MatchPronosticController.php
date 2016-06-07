<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MatchPronosticController extends Controller {

    public function ListMatchAParierAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $matchAparier = $em->getRepository("FTTAdminBundle:MatchsPronostic")->findLastProno();
        if ($request->getMethod() == "POST") {
            $date = new \DateTime();
            $date = date("Y-m-d h:i:s");
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
            for ($x = 0; $x <= 12; $x++) {

                if (!empty($_POST[$x])) {
                    $prono = new \FTT\AdminBundle\Entity\AdherentPronostic();
                    $prono->setImeiPronostic($date);
                    $prono->setIdAdherent($CurrUser);
                    $prono->setIdMatchsPronostic($matchAparier[$x]);
                    $reponse = $request->get($x);
                    $prono->setReponse($reponse);
                    
                    
                    if ((isset($_POST["joker"])) && ($_POST['joker'] == $x)) {
                        $prono->setNbrJoker(1);
                    } else {
                        $prono->setNbrJoker(0);
                    }
                    
                    
                    $mise = $request->get('mise');
                    $prono->setValeurMise($mise);

                    $quota = $matchAparier[$x]->getQuota();

                    if ($matchAparier[$x]->getIdMatch()->getIdJoueur3() == null) {
                        if ($reponse == 1) {
                            if ($matchAparier[$x]->getIdMatch()->getIdJoueur1()->getClassementInternational() > $matchAparier[$x]->getIdMatch()->getIdJoueur2()->getClassementInternational()) {
                                $prono->setGain(($quota * 0.3) * $mise);
                            } else {
                                $prono->setGain(($quota * 0.7) * $mise);
                            }
                        } else {
                            if ($matchAparier[$x]->getIdMatch()->getIdJoueur1()->getClassementInternational() > $matchAparier[$x]->getIdMatch()->getIdJoueur2()->getClassementInternational()) {
                                $prono->setGain(($quota * 0.7) * $mise);
                            } else {
                                $prono->setGain(($quota * 0.3) * $mise);
                            }
                        }
                    } else {

                        if ($reponse == 1) {
                            if ($matchAparier[$x]->getIdMatch()->getIdJoueur1()->getClassementInternational() +
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur2()->getClassementInternational() >
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur3()->getClassementInternational() +
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur4()->getClassementInternational()) {
                                $prono->setGain(($quota * 0.3) * $mise);
                            } else {
                                $prono->setGain(($quota * 0.7) * $mise);
                            }
                        } else {
                            if ($matchAparier[$x]->getIdMatch()->getIdJoueur1()->getClassementInternational() +
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur2()->getClassementInternational() >
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur3()->getClassementInternational() + 
                                    $matchAparier[$x]->getIdMatch()->getIdJoueur4()->getClassementInternational()) {
                                $prono->setGain(($quota * 0.7) * $mise);
                            } else {
                                $prono->setGain(($quota * 0.3) * $mise);
                            }
                        }
                    }



                    $em->persist($prono);
                }
            }
                    $user->setPointsAdherent($user->getPointsAdherent()-$mise);
                    $em->persist($user);
                    $em->flush();
        }


        return $this->render("FTTUtilisateurBundle:Pronostic:MatchAParier.html.twig", array("matchsAparier" => $matchAparier,
        ));
    }

}
