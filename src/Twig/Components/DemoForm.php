<?php

namespace App\Twig\Components;

use App\Form\DemoFormData;
use App\Form\DemoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\ComponentToolsTrait;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class DemoForm extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;
    use ComponentToolsTrait;

    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(DemoFormType::class, new DemoFormData());
    }

    #[LiveAction]
    public function save(): void
    {
        $this->submitForm();

        $formData = $this->getForm()->getData();
        assert($formData instanceof DemoFormData);

        if ($this->getForm()->isValid()) {
            $this->emit('toast:add', [
                'type' => 'success',
                'message' => "Form submitted successfully! Hello {$formData->name}!"
            ]);

            $this->resetForm();
        } else {
            $this->emit('toast:add', [
                'type' => 'danger',
                'message' => 'Please correct the errors in the form'
            ]);
        }
    }
}