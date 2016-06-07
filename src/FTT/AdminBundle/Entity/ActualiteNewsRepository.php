<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FTT\AdminBundle\Entity;

/**
 * Description of ActualiteNewsRepository
 *
 * @author Ibrahim
 */
class ActualiteNewsRepository extends \Doctrine\ORM\EntityRepository {

    public function CountAll() {

        $query = $this->getEntityManager()->createQuery(
                        'select count(r) from FTTAdminBundle:ActualiteNews r '
                )
        ;
        $count = $query->getSingleScalarResult();
        return $count;
    }

}
