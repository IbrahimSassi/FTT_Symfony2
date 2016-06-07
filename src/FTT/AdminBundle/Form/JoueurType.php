<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class JoueurType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomJoueur', null, array("label" => "Nom : ","attr" => array("class"=>"form-control","placeholder"=>"Nom du joueur")))
                ->add('prenomJoueur', null, array("label" => "Prenom : "))
                ->add('imageJoueur', 'file', array('label' => 'Image du joueur :', 'required' => false, 'data_class' => null,"attr" => array("class"=>"form-control")))
                ->add('categorieJoueur', 'choice', array(
                    'choices' => array(
                        'junior' => 'junior',
                        'senior' => 'senior',
                        'veterant' => 'veterant'
                    ),
                    'multiple' => false, "attr" => array("class" => "form-control")))
                ->add('typeJoueur', 'choice', array(
                    'choices' => array(
                        'amateur' => 'amateur',
                        'professionnel' => 'professionnel'
                    ),
                    'multiple' => false, "attr" => array("class" => "form-control")))
                ->add('idClub', null, array("label" => "Club : ", "attr" => array("class" => "form-control")))
                ->add('Valider', 'submit', array("attr" => array("class" => "btn btn-success")))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\Joueur'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ftt_adminbundle_joueur';
    }

}
