<?php
// src/Project/StoreBundle/Form/Type/RegistrationType.php
namespace Project\StoreBundle\Form\Type;

use Project\StoreBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('title')
			->add('description')
			->add('actors')
			->add('genre')
		;
    }

    public function getName()
    {
        return 'registration';
    }
}