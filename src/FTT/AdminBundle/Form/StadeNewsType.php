<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StadeNewsType
 *
 * @author MARWEN HLEILI
 */
namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class StadeNewsType extends AbstractType {

    //put your code here


    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomStade',null,array("label"=>"Nom stade : ","attr"=>array("class"=>"form-control")))
                ->add('capacite',null,array("label"=>"Capacite : ","attr"=>array("class"=>"form-control")))
                ->add('idComplexe',null,array("label"=>"Complexe :","attr"=>array("class"=>"form-control")))
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Stade'
        ));
    }

    public function getName() {
        return 'ftt_adminbundle_stade';
    }

}