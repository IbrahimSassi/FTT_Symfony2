<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Entity\StreamingMatch;
use Symfony\Component\HttpFoundation\Request;


class StreamingMatchController extends Controller
{
    
    public function ListStreamingMatchAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $liens = $em->getRepository("FTTAdminBundle:StreamingMatch")->findAll();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findStreamingMatch();
        return $this->render("FTTUtilisateurBundle:Communication:RegarderMatch.html.twig",
                array("liens" => $liens,
                    "matchs" => $matchs
                    ));

        }
    
}
