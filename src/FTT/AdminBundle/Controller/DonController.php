<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\DonType;
use FTT\AdminBundle\Form\attribuerdonType;
use FTT\AdminBundle\Entity\Dons;
use FTT\AdminBundle\Entity\DonsClubs;
use Symfony\Component\HttpFoundation\Request;


class DonController extends Controller
{
    public function AfficherDonsAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository("FTTAdminBundle:Dons")->find($id);
        
        
        return $this->render("FTTAdminBundle:Don:don.html.twig",
                array("don" => $don,
                 
                    ));
    }
    public function listDonsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $dons = $em->getRepository("FTTAdminBundle:Dons")->findAll();        
        
       

        return $this->render("FTTAdminBundle:Don:listdon.html.twig",
                array("dons" => $dons,
                 
                    ));
    }
     public function suppDonsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository('FTTAdminBundle:Dons')->find($id);
        $em->remove($don);
        $em->flush();
        return $this->redirect($this->generateUrl('list_dons'));
    }
    
    
    public function modifierDonsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository('FTTAdminBundle:Dons')->find($id);
        $Form = $this->createForm(new DonType(), $don);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($don);
            $em->flush();
            return $this->redirect($this->generateUrl('list_dons'));
        }
        
        return $this->render("FTTAdminBundle:Don:modifierDon.html.twig", array('Form' => $Form->createView()));
    }
    
   public function ajouterDonsAction()
    {
        
        $don2 = new Dons(); 
        $Form = $this->createForm(new DonType(), $don2);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($don2);
            $em->flush();
            return $this->redirect($this->generateUrl('list_dons'));
        }

        return $this->render("FTTAdminBundle:Don:ajouterDon.html.twig", array('Form' => $Form->createView()));

    }
    
      public function attribuerDonsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository('FTTAdminBundle:Dons')->find($id);
        $Form = $this->createForm(new attribuerdonType(), $don);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($don);
            $em->flush();
            return $this->redirect($this->generateUrl('list_dons'));
        }
        
        return $this->render("FTTAdminBundle:Don:attribuerDon.html.twig", array('Form' => $Form->createView()));
    }
    
}
