<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;

class DemoFormData
{
    #[Assert\NotBlank(message: 'Name is required')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Name must be at least {{ limit }} characters long',
        maxMessage: 'Name cannot be longer than {{ limit }} characters'
    )]
    public ?string $name = null;

    #[Assert\NotBlank(message: 'Email is required')]
    #[Assert\Email(message: 'Please enter a valid email address')]
    public ?string $email = null;

    #[Assert\Length(
        max: 200,
        maxMessage: 'Message cannot be longer than {{ limit }} characters'
    )]
    public ?string $message = null;

    #[Assert\NotBlank(message: 'Subject is required')]
    #[Assert\Choice(
        choices: ['general', 'support', 'feedback', 'other'],
        message: 'Please select a valid subject'
    )]
    public ?string $subject = null;
}