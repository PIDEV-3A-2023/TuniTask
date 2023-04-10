<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

class EditoffreformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', null, [
            'label' => false,
            'attr' => ['class' => 'i'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le titre ne peut pas être vide.']),
                
            ],
            
        ])
        ->add('salaireh', null, [
            'label' => false,
            'attr' => ['class' => 'i'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le salaire ne peut pas être vide.']),
                new Assert\Type(['type' => 'numeric', 'message' => 'Le salaire doit être numérique.']),
    ],
    'invalid_message' => 'Le salaire doit être numérique.'
        
        ])
        ->add('description', TextareaType::class, [
            'label' => false,
            'attr' => ['class' => 'i'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'La description ne peut pas être vide.']),
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Modifier',
            'attr' => ['class' => 'b'],
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
