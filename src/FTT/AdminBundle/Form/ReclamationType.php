<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ReclamationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('email', null, array('label' => 'De la part de :', 'required' => false, 'data_class' => null,'disabled'=> true,"attr" => array("class"=>"form-control","placeholder"=>"Saisir votre Email")))
           
            ->add('sujet',null,array('label' => 'Sujet :','data_class' => null,'attr' => array ("class" => "form-control"),'disabled'=> true))
             ->add('description',null,array('label' => 'Message :','disabled'=> true,"attr" => array("class"=>"form-control")))
                ->add('reponseReclamation',null,array('label' => 'Réponse :',"attr" => array("class"=>"form-control")))
         
         
        ;
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
        return 'ftt_adminBundle_reclamationfederation';
    }
}

