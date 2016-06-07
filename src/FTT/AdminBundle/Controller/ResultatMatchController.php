<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\ResultatMatchType;
use FTT\AdminBundle\Entity\ResultatMatch;
use Symfony\Component\HttpFoundation\Request;


class ResultatMatchController extends Controller
{
    
    public function ajouterAction($idMatch)
    {
        
        $score = new ResultatMatch();

        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($idMatch);
        
        
        $Form = $this->createForm(new ResultatMatchType(), $score);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
        $score->setIdMatch($match);
            $em->persist($score);
            $em->flush();
            return $this->redirect($this->generateUrl('List_match_sansScore'));
        }

        return $this->render("FTTAdminBundle:ResultatMatch:attribuerScore.html.twig",
                array('Form' => $Form->createView()
                    
                    ));

    }
    
}
