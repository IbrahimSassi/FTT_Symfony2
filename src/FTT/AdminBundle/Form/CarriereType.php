<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
class CarriereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('idClub',null,array("label"=>"Club : ","attr" => array("class"=>"form-control")))
            ->add('typeCarriere','choice', array(
            'choices' => array(
            'transfert' => 'transfert',
            'blessures' => 'blessures',
            'autres' => 'autres'
                ),
             'multiple' => false,"attr" => array("class"=>"form-control")))
           
            ->add('dateCarriere',null,array("label"=>"Date Carriere : ","attr" => array("class"=>"form-control")))
            ->add('description',null,array("label"=>"description : ","attr" => array("class"=>"form-control")))
         
            ->add('Valider','submit',array("attr" => array("class"=>"btn btn-success")))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\CarriereJoueur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_carrierejoueur';
    }
}

