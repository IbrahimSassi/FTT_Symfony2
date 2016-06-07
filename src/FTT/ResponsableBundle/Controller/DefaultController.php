<?php

namespace FTT\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FTTResponsableBundle:Default:index.html.twig', array('name' => $name));
    }
}
