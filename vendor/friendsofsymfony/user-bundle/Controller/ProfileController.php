<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller {

    /**
     * Show the user
     */
    public function showAction() {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
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
            return $this->redirect($this->generateUrl('consulter_profil'));
        }
        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            return $this->render("FTTAdminBundle:Profil:consulterProfil.html.twig", array("images" => $images,
                        'Form' => $Form->createView()));
        }
        else if ($this->get('security.context')->isGranted('ROLE_ARBITRE')) {
            return $this->render("FTTArbitreBundle:Profil:consulterProfil.html.twig", array("images" => $images,
                        'Form' => $Form->createView()));
        }
        else if ($this->get('security.context')->isGranted('ROLE_MEDECIN')) {
            return $this->render("FTTMedecinBundle:Profil:consulterProfil.html.twig", array("images" => $images,
                        'Form' => $Form->createView()));
        }
        else if ($this->get('security.context')->isGranted('ROLE_RESPONSABLE')) {
            return $this->render("FTTResponsableBundle:Profil:consulterProfil.html.twig", array("images" => $images,
                        'Form' => $Form->createView()));
        }
        else if ($this->get('security.context')->isGranted('ROLE_ADHERENT')) {
            return $this->render("FTTAdherentBundle:Profil:consulterProfil.html.twig", array("images" => $images,
                        'Form' => $Form->createView()));
        }
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
