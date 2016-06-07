<?php

namespace FTT\AdminBundle\Entity;

use Beelab\PaypalBundle\Entity\Transaction as BaseTransaction;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Transaction extends BaseTransaction {

    public function getDescription() {
        
    }

    public function getItems() {
        return array();
    }

    public function getShippingAmount() {
        
    }

}
