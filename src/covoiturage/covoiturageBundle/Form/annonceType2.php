<?php

namespace covoiturage\covoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class annonceType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieuDepart',null,array('label'=>'Votre lieu de depart : ','attr' => array('style' => 'width: 400px')))
            ->add('lieuArrive',null,array('label'=>'Lieu de Destination : ','attr' => array('style' => 'width: 400px')))
            ->add('dateDepart','datetime',array('label'=>'Date de depart : ','widget'=>'single_text','attr' => array('style' => 'width: 362px')))
            ->add('precisions','textarea',array('label'=>'vos exigences pour le voyage : ','attr' => array('style' => 'width: 400px')))
        ;   
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'covoiturage\covoiturageBundle\Entity\annonce',
            
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'covoiturage_covoituragebundle_annonceConducteur';
    }
}
