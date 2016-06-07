<?php

namespace FTT\AdminBundle\Entity;

class ReclamationFederationRepository extends \Doctrine\ORM\EntityRepository {

    public function findReclamationWithEmail() {
        $query = $this->getEntityManager()
                ->createQuery("SELECT r from FTTAdminBundle:ReclamationFederation r WHERE r.email is not null");

        return $query->getResult();
    }

    public function CountAll() {

        $query = $this->getEntityManager()->createQuery(
                'select count(r) from FTTAdminBundle:ReclamationFederation r '
                )
        ;
        $count = $query->getSingleScalarResult();
        return $count;
    }

}
