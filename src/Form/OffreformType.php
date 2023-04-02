<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class OffreformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('titre', null, [
            'label' => false,
            'attr' => ['class' => 'i']
        ])
        ->add('salaireh', null, [
            'label' => false,
            'attr' => ['class' => 'i']
        ])
        ->add('description', TextareaType::class, [
            'label' => false,
            'attr' => ['class' => 'i']
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'ajouter',
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
