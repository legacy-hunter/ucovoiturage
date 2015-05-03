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
            
            ->add('dateDepart','datetime',array('label'=>'Date de depart : ','widget'=>'single_text','attr' => array('style' => 'width: 260px','required'=>'true')))
            ->add('precisions','textarea',array('label'=>'vos exigences pour le voyage : ','attr' => array('style' => 'width: 300px','required'=>'true')))
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
