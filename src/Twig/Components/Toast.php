<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Toast
{
    use DefaultActionTrait;

    #[LiveProp]
    public array $toasts = [];

    #[LiveListener('toast:add')]
    public function onToastAdd(#[LiveArg] string $type, #[LiveArg] string $message): void
    {
        $this->toasts[] = [
            'id' => uniqid(),
            'type' => $type,
            'message' => $message,
            'timestamp' => time()
        ];
    }

    #[LiveAction]
    public function removeToast(#[LiveArg] string $id): void
    {
        $this->toasts = array_filter($this->toasts, fn($toast) => $toast['id'] !== $id);
    }

    #[LiveAction]
    public function clearAll(): void
    {
        $this->toasts = [];
    }
}