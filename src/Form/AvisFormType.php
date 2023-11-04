<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idMovie', TextType::class)
            ->add('idSerie', TextType::class)
            ->add('username', TextType::class, [
                'attr' => [
                    'style' => 'width: 100px; margin: 0 25px;',
                ],
            ])
            ->add('rates', TextType::class, [
                'attr' => [
                    'style' => 'width: 100px; margin: 0 25px;',
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'style' => 'width: 100px; margin: 0 25px;',
                ],
            ])
            ->add('date')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}

