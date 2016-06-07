<?php
namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class SessionArbitreType extends AbstractType {
    
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('typeSessionArbitre','choice', array(
            'choices' => array(
            'international' => 'international',
            'national' => 'national'),
            'multiple' => false,"attr" => array("class"=>"form-control")))
              ->add('dateSessionArbitre',null,array("label"=>"Date Session : ",'years' => range(2016, 2020),"attr" => array("class"=>"form-control")))
              ->add('dateOuvertDepot',null,array("label"=>"Date Ouverture Depot : ",'years' => range(2016, 2020),"attr" => array("class"=>"form-control")))
              ->add('dateClotureDepot',null,array("label"=>"Date Fermeture Depot : ",'years' => range(2016, 2020),"attr" => array("class"=>"form-control")))
              ->add('lieuSessionArbitre','text',array("label"=>"Localisation : ","attr" => array("class"=>"form-control")))
              ->add('nbArbitreSession','number',array("label"=>"Nombre de places : ","attr" => array("class"=>"form-control")))
             ->add('Valider','submit',array("attr" => array("class"=>"btn btn-success")));
               
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\SessionArbitre'
        ));
    }
    /**
     * @return string
     */
    public function getName() {
         return 'ftt_adminbundle_sessionArbitre';
    }

//put your code here
}
