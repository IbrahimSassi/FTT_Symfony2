<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EvenementType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomEvenement', 'text', array("label" => "Nom de l'événement: ", 'required' => true, "attr" => array("class" => "form-control")))
                ->add('typeEvenement', "choice", array("label" => "Type de l'événement", "attr" => array("class" => "flat"), "choices" => array(
                        'international' => 'international',
                        'national' => 'national',
                        'autres' => 'autres'
                    ), 'multiple' => false, 'expanded' => true
                ))
                ->add('dateDebut', 'date', array("label" => "Date Début de l'événement: ",'years' => range(2016, 2020), 'required' => true, "attr" => array("class" => "form-control")))
                ->add('dateFin', 'date', array("label" => "Date Fin de l'événement: ",'years' => range(2016, 2020), 'required' => true, "attr" => array("class" => "form-control")))
                ->add('valider', 'submit', array("attr" => array("class" => "btn btn-success")))
                ->add('reset', 'reset', array("attr" => array("class" => "btn btn-danger")));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ftt_adminbundle_events';
    }

}
