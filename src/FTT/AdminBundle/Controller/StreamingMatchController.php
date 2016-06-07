<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\StreamingMatchType;
use FTT\AdminBundle\Entity\StreamingMatch;
use Symfony\Component\HttpFoundation\Request;


class StreamingMatchController extends Controller
{
    
    public function ajouterAction()
    {
        
        $lien = new StreamingMatch();
        $Form = $this->createForm(new StreamingMatchType(), $lien);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lien);
            $em->flush();
            return $this->redirect($this->generateUrl('list_matchsInfo'));
        }

        return $this->render("FTTAdminBundle:StreamingMatch:ajouterMatchStreaming.html.twig", array('Form' => $Form->createView()));

        }
    
}
