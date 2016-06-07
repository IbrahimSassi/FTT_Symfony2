<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DonsClubForm extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('idClub', null, array("label" => "Club: ", 'required' => true, "attr" => array("class" => "form-control")))
                ->add('idDon', null, array("label" => "Dons par type: ", 'required' => true, "attr" => array("class" => "form-control")))
                ->add('valider', 'submit', array("attr" => array("class" => "btn btn-success")))
                ->add('reset', 'reset', array("attr" => array("class" => "btn btn-failure")));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\DonsClubs'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ftt_adminbundle_donsClubs';
    }

}
