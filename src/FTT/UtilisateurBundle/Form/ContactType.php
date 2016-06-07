<?php

namespace FTT\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      
            ->add('sujet',null,array('label' => 'Sujet :','data_class' => null,'attr' => array ("class" => "form-control")))
            ->add('email', null, array('label' => 'Email :', 'required' => false, 'data_class' => null,'attr' => array ("class" => "form-control")))
            ->add('description',null,array('label' => 'Description :','attr' => array ("class" => "form-control")))
            ->add('Envoyer', 'submit',array('attr' => array ("class" => "btn btn-success btn-block")))   ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\ReclamationFederation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_reclamationfederation';
    }
}

