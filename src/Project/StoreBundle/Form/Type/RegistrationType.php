<?php
// src/Project/StoreBundle/Form/Type/RegistrationType.php
namespace Project\StoreBundle\Form\Type;

use Project\StoreBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', new UserType());
        $builder->add(
            'terms',
            'checkbox',
            array('property_path' => 'termsAccepted')
        );
        $builder->add('Register', 'submit');
    }

    public function getName()
    {
        return 'registration';
    }
}