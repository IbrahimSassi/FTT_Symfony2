<?php

namespace FTT\ArbitreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;





class PlanningArbitreType extends AbstractType{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
              ->add('dateDispo',null,array("label"=>"Date Disponibilite : "))
           
              ->add('description','textarea',array("label"=>"Descriciption : ","attr"=>array('style'=>'margin-top: 25px;
    margin-left: -92px;')))
             
             ->add('Valider','submit',array("attr" => array("class"=>"btn btn-success")));
               
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\PlanningArbitre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_planningArbitre';
    }

}
