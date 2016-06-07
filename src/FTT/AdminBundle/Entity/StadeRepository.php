<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StadeRepository
 *
 * @author MARWEN HLEILI
 */

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

class StadeRepository extends EntityRepository {

    public function findByL($lettre) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT S from FTTAdminBundle:Stade S WHERE S.nomStade like :ser ")
                ->setParameter('ser', $lettre . '%');
        return $query->getResult();
    }

    //put your code here
}
