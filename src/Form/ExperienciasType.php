<?php

namespace App\Form;

use App\Entity\Experiencias;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperienciasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('tipo')
            ->add('frase')
            ->add('precio')
            ->add('descripcion')
            ->add('clima')
            ->add('indispensable')
            ->add('tiempo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Experiencias::class,
        ]);
    }
}
