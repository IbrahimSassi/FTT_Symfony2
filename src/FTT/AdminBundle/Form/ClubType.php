<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ClubType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomClub',null,array('label' => 'Nom du club :','data_class' => null,'attr' => array ("class" => "form-control")))
            ->add('logoClub', 'file', array('label' => 'logo du club :', 'required' => false, 'data_class' => null))
            ->add('dateFondation',null,array('label' => 'date de fondation :'))
            ->add('adresseClub',null,array('label' => 'Adresse du club :','data_class' => null,'attr' => array ("class" => "form-control")))
            ->add('valider', 'submit',array('attr' => array ("class" => "btn btn-success")))
             ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Club'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_club';
    }
}

