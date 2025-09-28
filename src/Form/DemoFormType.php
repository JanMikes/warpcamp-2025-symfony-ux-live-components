<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Full Name',
                'attr' => [
                    'placeholder' => 'Enter your full name',
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => [
                    'placeholder' => 'Enter your email address',
                    'class' => 'form-control'
                ]
            ])
            ->add('subject', ChoiceType::class, [
                'label' => 'Subject',
                'choices' => [
                    'General Inquiry' => 'general',
                    'Support Request' => 'support',
                    'Feedback' => 'feedback',
                    'Other' => 'other',
                ],
                'placeholder' => 'Select a subject',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Enter your message (optional)',
                    'class' => 'form-control',
                    'rows' => 4
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemoFormData::class,
        ]);
    }
}