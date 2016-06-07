<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FTT\AdminBundle\Entity;

/**
 * Description of MatchRepository
 *
 * @author Ibrahim
 */
class AdherentPronosticRepository extends \Doctrine\ORM\EntityRepository {

    public function findMyIMEI($user) {

        $query = $this->getEntityManager()->createQuery(
                        'select DISTINCT(r.imeiPronostic) from FTTAdminBundle:AdherentPronostic r '
                        . 'where r.idAdherent =:var'
                )
                ->setParameter('var', $user)
        ;
        
        $imeis = $query->getResult();
        return $imeis;
    }

}
