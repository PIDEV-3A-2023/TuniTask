<?php

namespace App\Form;

use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

class CommentaireaddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('commentaire', TextareaType::class, [
                'label' => false,
                'attr' => ['class' => 'i'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le commentaire ne peut pas être vide.']),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'ajouter',
                'attr' => ['class' => 'b'],
            ]);
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
