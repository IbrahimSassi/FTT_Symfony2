<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace FTT\UtilisateurBundle\Redirection;

use Symfony\Component\HttpFoundation\RedirectResponse ;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface ;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface ;
use Symfony;

/**
 * Description of AfterLoginRedirection
 *
 * @author Ibrahim
 */
class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // Get list of roles for current user
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true)) {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('consulter_profil_admin'));
        } elseif (in_array('ROLE_ARBITRE', $rolesTab, true)) {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('consulter_profil_arbitre'));
        } elseif (in_array('ROLE_MEDECIN', $rolesTab, true)) {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('consulter_profil_medecin'));
        } elseif (in_array('ROLE_RESPONSABLE', $rolesTab, true)) {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('consulter_profil_responsable'));
        } elseif (in_array('ROLE_ADHERENT', $rolesTab, true)) {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('ftt_utilisateur_homepage'));
        } else {
            $redirection = new Symfony\Component\HttpFoundation\RedirectResponse($this->router->generate('ftt_utilisateur_homepage'));
        }
        
        return $redirection;
    }
} 