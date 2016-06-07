<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComplexeNewsType
 *
 * @author MARWEN HLEILI
 */
namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ComplexeNewsType extends AbstractType {

    //put your code here


    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomComplexe',null,array("label"=>'Nom complexe : ',"attr"=>array("class"=>"form-control")))
                ->add('place',null,array("label"=>'Place : ',"attr"=>array("class"=>"form-control")))
                ->add('imageComplexe', 'file', array('label' => 'image complexe', 'required' => false, 'data_class' => null,"attr"=>array("class"=>"form-control")))
                ->add('nbStade',null,array("label"=>'Nombre de place : ',"attr"=>array("class"=>"form-control")))
                ->add('latitude',null,array("label"=>"latitude","attr"=>array("class"=>"form-control")))
                ->add('longitude',null,array("label"=>"longitude","attr"=>array("class"=>"form-control")))
                
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Complexe'
        ));
    }

    public function getName() {
        return 'ftt_adminbundle_complexe';
    }
    

}
