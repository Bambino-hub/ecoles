<?php

namespace App\Form;

use App\Entity\Days;
use App\Entity\Level;
use App\Entity\Matter;
use App\Entity\User;
use App\Entity\WorkSpace;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkSpaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('users', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'lastname'
            // ])
            ->add('days', EntityType::class, [
                'class' => Days::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false
            ])
            ->add('levels', EntityType::class, [
                'class' => Level::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false


            ])
            ->add('matters', EntityType::class, [
                'class' => Matter::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false

            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => WorkSpace::class,
        ]);
    }
}
