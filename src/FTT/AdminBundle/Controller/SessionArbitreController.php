<?php

namespace FTT\AdminBundle\Controller;

use FTT\AdminBundle\Entity\SessionArbitre;
use FTT\AdminBundle\Form\SessionArbitreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class SessionArbitreController extends Controller {
    
     public function ajouterAction()
    {       
        $session= new SessionArbitre();
        $Form = $this->createForm(new SessionArbitreType(), $session);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
       if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($session);
            $em->flush();
            return $this->redirect($this->generateUrl('SessionArbitre_display'));
       }
      return $this->render("FTTAdminBundle:SessionArbitre:ajouterSession.html.twig", array('Form' => $Form->createView()));
    }
    public function listAction()
    {        
        $em = $this->getDoctrine()->getManager();
        $sessions = $em->getRepository("FTTAdminBundle:SessionArbitre")->findAll();                        
        return $this->render("FTTAdminBundle:SessionArbitre:listSession.html.twig",
                array("sessions" => $sessions
                    ));
    }
    
     public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $session = $em->getRepository('FTTAdminBundle:SessionArbitre')->find($id);
        $em->remove($session);
        $em->flush();
        return $this->redirect($this->generateUrl('SessionArbitre_display'));
    }
    
     public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $session = $em->getRepository('FTTAdminBundle:SessionArbitre')->find($id);
        $Form = $this->createForm(new SessionArbitreType(), $session);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($session);
            $em->flush();
            return $this->redirect($this->generateUrl('SessionArbitre_display'));
        }
        
        return $this->render("FTTAdminBundle:SessionArbitre:modifierSession.html.twig", array('Form' => $Form->createView()));
    }
    
    
       
    public function indexAction()
{
    $translated = $this->get('translator')->trans('Symfony is great');

    return new Response($translated);
}
 
    

}
