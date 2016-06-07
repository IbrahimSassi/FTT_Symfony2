<?php

namespace FTT\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\UserType;
use FTT\AdminBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue;

class ProfilController extends Controller {

    public function ProfilAction() {
        $em = $this->getDoctrine()->getManager();
        $userCo = $this->get('security.context')->getToken()->getUser();
        $id = $userCo->getId();
        $user = $em->getRepository("FTTAdminBundle:User")->find($id);
        $images = array();
        $images = base64_encode(stream_get_contents($user->getImageUser()));
        $Form = $this->createFormBuilder($user)
                ->add('imageUser', 'file', array('label' => 'Image :',
                    "required" => true, "data_class" => null))
                ->getForm();
        $request = $this->getRequest();
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $stream = fopen($user->getImageUser(), 'rb');
            $user->setImageUser(stream_get_contents($stream));
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('consulter_profil_responsable'));
        }

        return $this->render("FTTResponsableBundle:Profil:consulterProfil.html.twig", array(
                    "images" => $images,
                    "ProfilPic" => $images,
                    'Form' => $Form->createView()));
    }

    public function EditProfilAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request_stack')->getCurrentRequest();
        $userCo = $this->get('security.context')->getToken()->getUser();
        $id = $userCo->getId();
        $user = $em->getRepository('FTTAdminBundle:User')->find($id);
        $image = base64_encode(stream_get_contents($user->getImageUser()));

        $Form = $this->createFormBuilder($user)
                ->add('nomUser', null, array("label" => "Nom utilisateur : ", "attr" => array("class" => "form-control")))
                ->add('prenomUser', null, array("label" => "Pernom utilisateur : ", "attr" => array("class" => "form-control")))
                ->add('username', null, array("label" => "Identifiant : ", "attr" => array("class" => "form-control")))
                ->add('email', null, array("label" => "E-mail : ", "attr" => array("class" => "form-control")))
                ->add('ageUser', null, array("label" => "Age : ", "attr" => array("class" => "form-control")))
                ->add('telUser', null, array("label" => "Telephone : ", "attr" => array("class" => "form-control")))
                ->add('recaptcha', 'ewz_recaptcha', array(
                    'attr' => array(
                        'options' => array(
                            'theme' => 'light',
                            'type' => 'image'
                        )
                    ),
                    'mapped' => false
                ))
                ->add('Valider', 'submit', array("attr" => array("class" => "btn btn-dark")))
                ->getForm();
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('consulter_profil_responsable'));
        }

        return $this->render("FTTResponsableBundle:Profil:ModifierProfil.html.twig", array('Form' => $Form->createView()
                    , "ProfilPic" => $image,
        ));
    }

}
