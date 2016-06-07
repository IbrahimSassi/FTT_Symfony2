<?php

/**
   * @copyright  Copyright (c) 2009-2014 Steven TITREN - www.webaki.com
   * @package    Webaki\UserBundle\Redirection
   * @author     Steven Titren <contact@webaki.com>
    */

namespace FTT\UtilisateurBundle\Redirection;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class AfterLogoutRedirection implements LogoutSuccessHandlerInterface {

    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @var \Symfony\Component\Security\Core\SecurityContextInterface
     */
    private $security;

    /**
     * @param SecurityContextInterface $security
     */
    public function __construct(RouterInterface $router, SecurityContextInterface $security) {
        $this->router = $router;
        $this->security = $security;
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function onLogoutSuccess(Request $request) {

        $roles = $this->security->getToken()->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role) {
            return $role->getRole();
        }, $roles);
        // If is a commercial user or admin or super admin we redirect to the login area. Here we used FoseUserBundle bundle
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true) || in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_ARBITRE', $rolesTab, true) || in_array('ROLE_RESPONSABLE', $rolesTab, true) || in_array('ROLE_MEDECIN', $rolesTab, true) || in_array('ROLE_ADHERENT', $rolesTab, true))
            $response = new RedirectResponse($this->router->generate('fos_user_security_login'));
        // otherwise we redirect user to the homepage of website
        else
            $response = new RedirectResponse($this->router->generate('ftt_utilisateur_homepage'));

        return $response;
    }

}
