<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
class MatchInfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateMatch',null,array("label"=>"Date Match : ",'years' => range(2016, 2020),"attr" => array("class"=>"form-control")))
            ->add('typeMatch',"choice",array("label"=>"Type Match",
                'empty_value' => 'Choisir le type',"attr"=>array("class"=>"form-control"),"choices"=>array(
                'international'=>'international',
                'national'=>'national',
                'autres'=>'autres'
            ),'multiple'=>false,'expanded'=>false
                ))
            ->add('idArbitre',null,array("label"=>"Arbitre : ",
                'query_builder' => function(\FTT\AdminBundle\Entity\UserRepository $er)  {
            return $er->findByRole("ROLE_ARBITRE");
               
        },"attr" => array("class"=>"form-control")))
               
            ->add('idEvenement',null,array("label"=>"Evenement : ","attr" => array("class"=>"form-control")))
            ->add('idJoueur1',null,array("label"=>"Joueur 1 : ","attr" => array("class"=>"form-control")))
            ->add('idJoueur2',null,array("label"=>"Joueur 2 : ","attr" => array("class"=>"form-control")))
            ->add('idJoueur3',null,array("label"=>"Joueur 3 : ","attr" => array("class"=>"form-control")))
            ->add('idJoueur4',null,array("label"=>"Joueur 4 : ","attr" => array("class"=>"form-control")))
            ->add('idStade',null,array("label"=>"Stade : ","attr" => array("class"=>"form-control")))
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\MatchInfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_matchinfo';
    }
}
