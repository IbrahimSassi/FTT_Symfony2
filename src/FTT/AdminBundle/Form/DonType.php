<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeDon','text',  array("label"=>"Type de Don: ",'required' => true, "attr" => array("class"=>"form-control")))  
            ->add('descriptionDon','text', array("label"=>"Description: ",'required' => true,"attr" => array("class"=>"form-control")))
            ->add('lieuSession',null,array("label"=>"Lieu: ",'required' => true,"attr" => array("class"=>"form-control")))
                 ->add('dateSession','date',array("label"=>"Date: ",'years' => range(2016, 2020),'required' => true,"attr" => array("class"=>"form-control")))
               
            
     
            ->add(  'Valider', 'submit',array("attr" => array("class"=>"btn btn-success")))
          
                ->add(  'Reset', 'reset',array("attr" => array("class"=>"btn btn-failure")));
         
        
 
     
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Dons'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_dons';
    }
}
