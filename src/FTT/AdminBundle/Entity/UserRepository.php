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
class UserRepository extends \Doctrine\ORM\EntityRepository {

    public function findByRole($role) {

        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('FTTAdminBundle:User', 'u')
                ->where('u.roles LIKE :roles')
                ->setParameter('roles', '%"' . $role . '"%');

        return $qb;
    }

    public function updatesolde($id, $m) {

        $query = $this->getEntityManager()
                ->createQuery("UPDATE FTTAdminBundle:User u SET  u.soldeAdherent = :mo WHERE u.id = :id");

        $query->setParameter('id', $id);
        $query->setParameter('mo', $m);
        $query->execute();
    }

    public function CountAll() {

        $query = $this->getEntityManager()->createQuery(
                'select count(r) from FTTAdminBundle:User r '
                )
        ;
        $count = $query->getSingleScalarResult();
        return $count;
    }

    public function CountByRole($role) {

        $qb = $this->getEntityManager()->createQuery('select count(u) from FTTAdminBundle:User u where u.roles like :roles')
                ->setParameter('roles', '%' . $role . '%');
        $count = $qb->getSingleScalarResult();


        return $count;
    }

}
