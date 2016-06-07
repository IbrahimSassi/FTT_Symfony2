<?php

namespace FTT\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Routing\Generator\UrlGenerator;
class ActualiteNewsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreActualite',null,array('label' => 'Titre de l\'article :',"attr" => array("class"=>"form-control","placeholder"=>"Saisir votre titre")))
            ->add('imageActualite', 'file', array('label' => 'Image :',
                "required" => true,"data_class"=>null))
                ->add('descriptionActualite',null,array("label"=>"Description : ","attr" => array("class"=>"form-control col-md-7 col-xs-12","placeholder"=>"saisir la description")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTT\AdminBundle\Entity\ActualiteNews'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_adminbundle_actualitenews';
    }
}
