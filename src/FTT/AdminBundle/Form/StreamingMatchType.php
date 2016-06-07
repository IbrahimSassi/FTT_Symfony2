<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StreamingMatchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LienDIntegration',null,array("label"=>"Lien d'integration : ","attr" => array("class"=>"form-control col-md-7 col-xs-12")))
            ->add('idMatch',null,array("label"=>"Match : ","attr" => array("class"=>"form-control")))
            ->add('Valider','submit',array("attr" => array("class"=>"btn btn-dark")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\StreamingMatch'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_streamingmatch';
    }
}
