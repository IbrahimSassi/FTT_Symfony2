<?php

namespace FTT\AdminBundle\Controller;

use FTT\AdminBundle\Form\JoueurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MatchsPronosticController extends Controller {

    //put your code here


    public function listAction() {
        $em = $this->getDoctrine()->getManager();
        $matchAparier = $em->getRepository("FTTAdminBundle:MatchInfo")->findMatchWithoutResult();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {

            $date = new \DateTime();
            $date = date("Y-m-d h:i:s");
            $user = $this->container->get('security.context')->getToken()->getUser();

            for ($x = 0; $x < sizeof($matchAparier); $x++) {
                if ((isset($_POST['choix-'.$matchAparier[$x]->getId()])) && ($_POST['choix-'.$matchAparier[$x]->getId()] == 'match-' . $matchAparier[$x]->getId() )) {
                    $prono = new \FTT\AdminBundle\Entity\MatchsPronostic();
                    $prono->setDateAjout($date);
                    $prono->setIdAdmin($user);
                    $prono->setIdMatch($matchAparier[$x]);
                    $quota = $request->get($matchAparier[$x]->getId());
                    $prono->setQuota($quota);
                    $em->persist($prono);
                }
            }
            $em->flush();

            return $this->redirect($this->generateUrl('ftt_admin_homepage'));
        }
        return $this->render("FTTAdminBundle:MatchInfo:ChoisirMatchaParier.html.twig", array("matchAparier" => $matchAparier,
        ));
    }

}
