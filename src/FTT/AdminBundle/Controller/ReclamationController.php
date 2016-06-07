<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\ReclamationType;
use FTT\UtilisateurBundle\Form\ContactType;
use FTT\AdminBundle\Entity\ReclamationFederation;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;

class ReclamationController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository("FTTAdminBundle:ReclamationFederation")->findReclamationWithEmail();
        return $this->render("FTTAdminBundle:Reclamation:listReclamation.html.twig", array("reclamations" => $reclamations,
        ));
    }

    public function ajouterAction() {

        $reclamation = new ReclamationFederation();

        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if(is_object($user))
        {$CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());

        }
        else {
            $CurrUser=null;
        }

        $Form = $this->createForm(new ContactType(), $reclamation);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
       
              $reclamation->setIdUser($CurrUser);
        
        
           

            $em->persist($reclamation);
            $em->flush();


            return $this->redirect($this->generateUrl('ftt_utilisateur_homepage'));
        }
        return $this->render("FTTUtilisateurBundle:Reclamation:Contact.html.twig", array('Form' => $Form->createView()
        ));
    }

    public function sendMailAction($id) {



        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository('FTTAdminBundle:ReclamationFederation')->find($id);
        $Form = $this->createForm(new ReclamationType(), $reclamation);
        $request = $this->get('request');

        $Form->handleRequest($request);


        if ($Form->isSubmitted()) {
            $message = Swift_Message::newInstance()
                    ->setSubject("reponse à votre message")
                    ->setFrom('syrinehedfi5@gmail.com')
                    ->setTo($reclamation->getEmail())
                    ->setBody($reclamation->getReponseReclamation());

            $this->get('mailer')->send($message);


            return $this->render('FTTAdminBundle:Reclamation:succesmail.html.twig', array('to' => $reclamation->getEmail(),
                        'from' => 'syrinehedfi5@gmail.com'
            ));
        }

        return $this->redirect($this->generateUrl('list_reclamations'));
    }

    public function modifierAction($id) {

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('FTTAdminBundle:ReclamationFederation')->find($id);
        $to = $reclamation->getEmail();
  
        $Form = $this->createForm(new ReclamationType(), $reclamation);

        $request = $this->get('request');

        $Form->handleRequest($request);

        if ($Form->isSubmitted()) {
      

            $em->persist($reclamation);
            $em->flush();

            $this->sendMailAction($reclamation->getId());
        }

        return $this->render('FTTAdminBundle:Reclamation:RepondreReclamation.html.twig', array('Form' => $Form->createView()));
    }

}