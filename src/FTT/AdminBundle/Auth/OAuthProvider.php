<?php

namespace FTT\AdminBundle\Auth;

use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthUserProvider;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;

class OAuthProvider extends BaseClass {

    protected $session, $doctrine, $admins;

    public function __construct($session, $doctrine, $service_container) {
        $this->session = $session;
        $this->doctrine = $doctrine;
        $this->container = $service_container;
    }

    public function loadUserByUsername($username) {

        $qb = $this->doctrine->getManager()->createQueryBuilder();
        $qb->select('u')
                ->from('FTTAdminBundle:User', 'u')
                ->where('u.googleId = :gid')
                ->setParameter('gid', $username)
                ->setMaxResults(1);
        $result = $qb->getQuery()->getResult();

        if (count($result)) {
            return $result[0];
        } else {
            return new User();
        }
    }

    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $socialID = $response->getUsername();
        $qb = $this->doctrine->getManager()->createQueryBuilder();
        $service = $response->getResourceOwner()->getName();

        switch ($service) {
            case 'google':
                $qb->select('u')
                        ->from('FTTAdminBundle:User', 'u')
                        ->where('u.googleId = :gid')
                        ->setParameter('gid', $socialID)
                        ->setMaxResults(1);
                $result = $qb->getQuery()->getResult();
                break;
            case 'facebook':
                $qb->select('u')
                        ->from('FTTAdminBundle:User', 'u')
                        ->where('u.facebookId = :gid')
                        ->setParameter('gid', $socialID)
                        ->setMaxResults(1);
                $result = $qb->getQuery()->getResult();
                break;
        }
        $email = $response->getEmail();
        $nickName = $response->getRealName(); 
        $profilePic = $response->getProfilePicture();
        $userName = $response->getRealName() ;
        $userNom = $response->getRealName() ;
        $userPrenom = $response->getRealName();
        
        
 
  
       
        //check if the user already has the corresponding social account
        if (!count($result)) {
            //check if the user has a normal account
            $user = $this->userManager->findUserByEmail($email);
 
            if (null === $user || !$user instanceof UserInterface) {
                //if the user does not have a normal account, set it up:
                $user = $this->userManager->createUser();
             
                $user->setEmail($email);
                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(true);
                $user->addRole("ROLE_ADHERENT");
                $user->setUsername($userName);
                $user->setImageUser($profilePic);
                $user->setNomUser($userNom); 
                $user->setPrenomUser($userPrenom) ;
            }
            //then set its corresponding social id
            switch ($service) {
                case 'google':
                    $user->setGoogleID($socialID);
                    break;
                case 'facebook':
                    $user->setUsername($nickName);
                    $user->setFacebookID($socialID);
                    $nomPrenom = explode(" ", $nickName);
                    $user->setImageUser("https://graph.facebook.com/$socialID/picture?width=400&height=400");
                    $user->setNomUser($nomPrenom[1]); 
                    $user->setPrenomUser($nomPrenom[0]) ;
                    break;
            }
         
            $this->userManager->updateUser($user);
        } else {
            $user = $result[0]; /* return User */
        }
 
        return $user;
    }

    public function supportsClass($class) {
        return $class === 'FTT\\AdminBundle\\Entity\\User';
    }

}