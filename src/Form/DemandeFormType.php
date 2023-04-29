<?php

namespace App\Form;

use App\Entity\Demande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
           ->add('description', TextareaType::class, [
            'label' => false,
            'attr' => ['class' => 'i']
        ])
            ->add('salaire', null, [
                'label' => false,
                'attr' => ['class' => 'i'],
                'constraints' => [
                    new Assert\Type(['type' => 'numeric', 'message' => 'Le salaire doit être numérique.']),],
                    'invalid_message' => 'Le salaire doit être numérique.' ])
            ->add('delai')
            ->add('langage')
    
           ->add('save',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
