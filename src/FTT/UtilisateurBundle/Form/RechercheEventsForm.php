<?php

namespace FTT\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheEventsForm extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomEvenement')
                
                ->add('Valider', 'submit');
    }

    public function getName() {
        
    }

}
