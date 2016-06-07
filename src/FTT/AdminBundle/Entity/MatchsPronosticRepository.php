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
class MatchsPronosticRepository extends \Doctrine\ORM\EntityRepository{

    public function findLastProno() {
        
        
            $query = $this->getEntityManager()->createQuery(
                    'select m from FTTAdminBundle:MatchsPronostic m '
                    . 'where m.dateAjout = (select MAX(m1.dateAjout) from FTTAdminBundle:MatchsPronostic m1)'
                    );
            
                    $matchs = $query->getResult();
        
                    return $matchs;
                
        
    }
    
    
}
