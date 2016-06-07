<?php

namespace FTT\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FTTMedecinBundle:Default:index.html.twig', array('name' => $name));
    }
}
