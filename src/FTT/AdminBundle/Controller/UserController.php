<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\UserType;
use FTT\AdminBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    public function AfficherUserAction() {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("FTTAdminBundle:User")->findBy(array('enabled' => 1));
        return $this->render("FTTAdminBundle:User:listUsers.html.twig", array("users" => $users));
    }

    public function AfficherUserEnAttenteAction() {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("FTTAdminBundle:User")->findBy(array('enabled' => 0));
        return $this->render("FTTAdminBundle:User:validerCompte.html.twig", array("users" => $users));
    }

    public function BloquerUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FTTAdminBundle:User')->find($id);
        $user->setEnabled(0);
        $em->persist($user);
        $em->flush();

        $message = \Swift_Message::newInstance()
                ->setSubject('Compte bloque')
                ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                ->setTo(array($user->getEmail()))
                ->setContentType("text/html")
                ->setBody("Un administrateur a bloque votre compte");
        $this->get('mailer')->send($message);

        return $this->redirect($this->generateUrl('list_users'));
    }

    public function ValiderUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FTTAdminBundle:User')->find($id);
        $user->setEnabled(1);
        $em->persist($user);
        $em->flush();
        if ($user->hasRole('ROLE_ARBITRE')) {
            $role = 'ARBITRE';
        }
        if ($user->hasRole('ROLE_MEDECIN')) {
            $role = 'MEDECIN';
        }
        if ($user->hasRole('ROLE_RESPONSABLE')) {
            $role = 'RESPONSABLE ANTI-DOPAGE';
        }
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            $role = 'ADMIN';
        }
        if ($user->hasRole('ROLE_ADHERENT')) {
            $role = 'ADHERENT';
        }

        $message = \Swift_Message::newInstance()
                ->setSubject('Compte valide')
                ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                ->setTo(array($user->getEmail()))
                ->setContentType("text/html")
                ->setBody("Félicitation votre compte est validé avec succé. Vous etes un " . $role);
        $this->get('mailer')->send($message);

        return $this->redirect($this->generateUrl('modifier_user', array('id' => $user->getId())));
    }

    public function ModifierUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FTTAdminBundle:User')->find($id);
        $Form = $this->createForm(new UserType(), $user);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($user);
            $em->flush();
            
            $message = \Swift_Message::newInstance()
                    ->setSubject('Profil modifie')
                    ->setFrom(array('tft.codexit@gmail.com' => 'Féderation tunisienne de tennis'))
                    ->setTo(array($user->getEmail()))
                    ->setContentType("text/html")
                    ->setBody("Un administrateur a modifie vous donnees. Veuillez verifier votre compte ");
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('list_users'));
        }

        return $this->render("FTTAdminBundle:User:modifierUser.html.twig", array('Form' => $Form->createView()));
    }

}
