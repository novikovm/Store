<?php

namespace Project\StoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecenzjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul', 'text', array('label' => 'Tytuł rezenzji'))
            ->add('tresc', 'textarea', array('label' => 'Treść rezenzji'))
            ->add('save', 'submit', array(
                'label' => 'Prześlij rezenzję', 
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Project\StoreBundle\Entity\Recenzja'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'project_storebundle_recenzja';
    }
}