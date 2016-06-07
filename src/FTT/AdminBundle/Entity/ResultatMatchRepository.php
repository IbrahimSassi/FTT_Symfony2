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
class ResultatMatchRepository extends \Doctrine\ORM\EntityRepository{

    //pour recuperer les rencontres directes
    public function findMatchBetweenSpecificPlayers($idJoueur1,$idjoueur2) {
            $query = $this->getEntityManager()
            ->createQuery("select m from FTTAdminBundle:ResultatMatch m  "
                    . " inner join FTTAdminBundle:MatchInfo m1 with m1.id=m.idMatch "
                    . "where "
                    . "m1.idJoueur1 =:id1 and m1.idJoueur2 =:id2 "
                    . "or m1.idJoueur1 =:id2 and m1.idJoueur2 =:id1")
                    ->setParameter('id1',$idJoueur1)
                    ->setParameter('id2',$idjoueur2);
                    return $query->getResult();
    }
    //pour recuperer le nombre de victoire dans rencontres directes
    public function CountNbWinsDirectly($idJoueur1,$idjoueur2) {
            $query = $this->getEntityManager()
            ->createQuery("select COUNT(m) from FTTAdminBundle:ResultatMatch m"
                    . " inner join FTTAdminBundle:MatchInfo m1 with m1.id=m.idMatch "
                    . " where m1.idJoueur1= :id1 and m1.idJoueur2=:id2 "
                    . " and m.rsltJoueur1 > m.rsltJoueur2 or "
                    . " m1.idJoueur2= :id1 and m1.idJoueur1=:id2 and m.rsltJoueur1 < m.rsltJoueur2 ")
                    ->setParameter('id1',$idJoueur1)
                    ->setParameter('id2',$idjoueur2)
                    ;
                    return $query->getSingleScalarResult();
    }
    
    public function findResultatByEvent($idEvenement)
    {
            $query = $this->createQueryBuilder('r')
                ->select()
                ->join('FTTAdminBundle:MatchInfo', 'm', 'WITH', 'r.idMatch = m.id')
                    ->where('m.idEvenement=:var')
                    ->setParameter('var', $idEvenement);


                    $matchs = $query->getQuery()->getResult();
        
                    return $matchs;
    }
    
    public function findMatchWithResult() {
        
                
        $query = $this->getEntityManager()->createQuery(
                'select r from FTTAdminBundle:ResultatMatch r where r.idMatch In (select m.id from FTTAdminBundle:MatchInfo m)'
                );
                $matchs = $query->getResult();
                    return $matchs;
                
        
    }
}
