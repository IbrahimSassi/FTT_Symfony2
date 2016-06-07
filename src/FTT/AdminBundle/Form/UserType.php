<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $transformer = new \FTT\UtilisateurBundle\Form\StringToArrayTransformer();

        $builder
                ->add('nomUser', null, array("label" => "Nom utilisateur : ", "attr" => array("class" => "form-control", "readonly" => "true")))
                ->add('prenomUser', null, array("label" => "Pernom utilisateur : ", "attr" => array("class" => "form-control", "readonly" => "true")))
                ->add('immatricule', null, array("label" => "Immatricule : ", "attr" => array("class" => "form-control")))
                ->add('departementAdmin', null, array("label" => "Departement Admin : ", "attr" => array("class" => "form-control")))
                ->add('categorieArbitre', "choice", array("label" => "Categorie Arbitre : ", 'empty_value' => 'Choisir le type', "attr" => array("class" => "form-control"), "choices" => array(
                        'international' => 'international',
                        'national' => 'national',
                        'autres' => 'autres'
                    ), 'multiple' => false, 'expanded' => false
                ))
                ->add('specialiteMedecin', null, array("label" => "Specialite Medecin : ", "attr" => array("class" => "form-control")))
                ->add('quotaResponsable', null, array("label" => "Quota Responsable : ", "attr" => array("class" => "form-control")))
                ->add($builder->create('roles', 'choice', array(
                            'label' => ' ',
                            'mapped' => true,
                            'expanded' => false,
                            'multiple' => false,
                            'attr' => array("class" => "form-control"),
                            'choices' => array(
                                'ROLE_SUPER_ADMIN' => 'Administrateur',
                                'ROLE_ARBITRE' => 'Arbitre',
                                'ROLE_MEDECIN' => 'Medecin',
                                'ROLE_RESPONSABLE' => 'Responsbale anti-dopage',
                                'ROLE_ADHERENT' => 'Adherent')))
                        ->addModelTransformer($transformer))
                ->add('recaptcha', 'ewz_recaptcha', array(
                    'attr' => array(
                        'options' => array(
                            'theme' => 'light',
                            'type' => 'image'
                        )
                    ),
                    'mapped' => false
                ))
                ->add('Valider', 'submit', array("attr" => array("class" => "btn btn-dark")))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ftt_adminbundle_user';
    }

}
