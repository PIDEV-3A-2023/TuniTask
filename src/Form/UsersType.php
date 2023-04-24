<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('email',EmailType::class)
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth',BirthdayType::class)
            ->add('password',PasswordType::class)
            ->add('Who_you_are', ChoiceType::class, [
    'choices'  => [
        'Client' => 'Client',
        'Freelancer' => 'Freelancer',
        'Organisator'=> 'Organisator'
    ],
])
            ->add('Save',SubmitType::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
           // 'data_class' => Users::class,
        ]);
    }
}
