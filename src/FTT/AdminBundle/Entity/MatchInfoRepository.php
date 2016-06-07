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
class MatchInfoRepository extends \Doctrine\ORM\EntityRepository {

    public function findMatchWithoutResult() {


        $q2 = $this->createQueryBuilder('m')
                ->select('IDENTITY(r.idMatch)')
                ->join('FTTAdminBundle:ResultatMatch', 'r', 'WITH', 'r.idMatch = m.id');

        $query = $this->createQueryBuilder('c3');
        $query->where($query->expr()->notIn('c3.id', $q2->getDQL()));

        $matchs = $query->getQuery()->getResult();

        return $matchs;
    }

    public function findStreamingMatch() {


        $q2 = $this->createQueryBuilder('m')
                ->select('IDENTITY(r.idMatch)')
                ->join('FTTAdminBundle:StreamingMatch', 'r', 'WITH', 'r.idMatch = m.id');

        $query = $this->createQueryBuilder('c3');
        $query->where($query->expr()->In('c3.id', $q2->getDQL()));

        $matchs = $query->getQuery()->getResult();

        return $matchs;
    }

    public function findAllSorted() {
        return $this->findBy(array(), array('id' => 'DESC'));
    }

    public function findMatchAtester() {

        $q2 = $this->createQueryBuilder('m')
                ->select('IDENTITY(j.idMatch)')
                ->join('FTTAdminBundle:JoueurATester', 'j', 'WITH', 'j.idMatch = m.id');

        $query = $this->createQueryBuilder('c3');
        $query->where($query->expr()->notIn('c3.id', $q2->getDQL()));

        $matchs = $query->getQuery()->getResult();

        return $matchs;
    }

    public function CountAll() {

        $query = $this->getEntityManager()->createQuery(
                'select count(r) from FTTAdminBundle:MatchInfo r '
                )
        ;
        $count = $query->getSingleScalarResult();
        return $count;
    }

}
