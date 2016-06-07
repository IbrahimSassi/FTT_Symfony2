<?php

namespace FTT\ArbitreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResultatMatchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('compteRenduMatch','textarea',array("label"=>"Compte Rendu : ","attr"=>array('style'=>'margin-top: 25px;
    margin-left: -92px;')))
                
            ->add('Valider','submit',array("attr" => array("class"=>"btn btn-success")))
        ;
    }
    
   /**
     * @param OptionsResolverInterface $resolver
     */
   
    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_arbitrebundle_resultatmatch';
    }
}
