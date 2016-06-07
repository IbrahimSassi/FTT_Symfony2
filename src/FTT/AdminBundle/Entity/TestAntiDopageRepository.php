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
class TestAntiDopageRepository extends \Doctrine\ORM\EntityRepository {

    public function findResultatTest($id) {

        $q2 = $this->createQueryBuilder('t')
                ->select()
                ->join('FTTAdminBundle:JoueurATester', 'j', 'WITH', 'j.id = t.idJoueurTester')
                ->where('j.idResponsable =:var')
                ->setParameter('var', $id);


        $resultats = $q2->getQuery()->getResult();

        return $resultats;
    }
    
    public function findMyTest($id,$rs) {

        $q2 = $this->createQueryBuilder('t')
                ->select()
                ->where('t.idMedecin =:var','t.resultat=:var1')
                ->setParameter('var', $id)
                ->setParameter('var1', $rs);
        
        $resultats = $q2->getQuery()->getResult();

        return $resultats;
    }
    
    public function findMyCompteRendu($id,$rs) {

        $q2 = $this->createQueryBuilder('t')
                ->select()
                ->where('t.idMedecin =:var','t.resultat != :var1')
                ->setParameter('var', $id)
                ->setParameter('var1', $rs);
        
        $resultats = $q2->getQuery()->getResult();

        return $resultats;
    }
    
     public function CountTest($resultat) {

        $query = $this->getEntityManager()->createQuery(
                        'select count(r) from FTTAdminBundle:TestAntiDopage r where r.resultat = :var '
                )->setParameter('var', $resultat);
        ;
        $count = $query->getSingleScalarResult();
        return $count;
    }

}
