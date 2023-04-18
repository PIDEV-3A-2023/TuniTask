<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rating', ChoiceType::class, [
                    'choices'  => [
                        '★' => 1,
                        '★★' => 2,
                        '★★★' => 3,
                        '★★★★' => 4,
                        '★★★★★' => 5,
                    ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Confirmer',
                'attr' => ['class' => 'b'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}