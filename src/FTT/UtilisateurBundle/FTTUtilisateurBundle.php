<?php

namespace FTT\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FTTUtilisateurBundle extends Bundle
{
        public function getParent() {
            return 'FOSUserBundle'; 
            }

}
