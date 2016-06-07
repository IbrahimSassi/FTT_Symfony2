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
class JoueurRepository extends \Doctrine\ORM\EntityRepository {

    public function JoueurTester($id) {

        $query = $this->createQueryBuilder('j')
                ->select()
                ->join('FTTAdminBundle:JoueurATester', 'j1', 'WITH', 'j.id = j1.joueurChoisi')
                ->join('FTTAdminBundle:TestAntiDopage', 't', 'WITH', 'j1.id = t.idJoueurTester')
                ->where('t.id = :var')
                ->setParameter('var', $id);

        $resultats = $query->getQuery()->getResult();

        return $resultats;
    }

    public function findAllOrderByClassementNationnal() {
        $query = $this->getEntityManager()
                ->createQuery("SELECT j from FTTAdminBundle:Joueur j ORDER BY j.classementNational ASC");

        return $query->getResult();
    }

    public function findAllOrderByClassementInternationnal() {
        $query = $this->getEntityManager()
                ->createQuery("SELECT j from FTTAdminBundle:Joueur j ORDER BY j.classementInternational ASC");

        return $query->getResult();
    }

}
