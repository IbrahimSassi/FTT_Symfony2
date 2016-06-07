<?php

namespace FTT\AdminBundle\Form;

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
            ->add('rsltJoueur1',null,array("attr" => array("class"=>"form-control col-md-7 col-xs-12")))
            ->add('rsltJoueur2',null,array("attr" => array("class"=>"form-control col-md-7 col-xs-12")))
            ->add('details',null,array("attr" => array("class"=>"form-control col-md-7 col-xs-12","placeholder"=>"Pour plus de details")))
            ->add('Valider','submit',array("attr" => array("class"=>"btn btn-dark")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\ResultatMatch'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_resultatmatch';
    }
}
