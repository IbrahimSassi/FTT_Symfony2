<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComplexeRepository
 *
 * @author MARWEN HLEILI
 */

namespace FTT\AdminBundle\Entity;

class ComplexeRepository extends \Doctrine\ORM\EntityRepository {

    public function findByC($lettre) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT c from FTTAdminBundle:Complexe c WHERE c.nomComplexe like :ser ")
                ->setParameter('ser', $lettre . '%');
        return $query->getResult();
    }

}
