<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentToolsTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Counter
{
    use DefaultActionTrait;
    use ComponentToolsTrait;

    #[LiveProp]
    public int $count = 0;

    #[LiveAction]
    public function increase(): void
    {
        $this->count++;

        $this->emit('toast:add', [
            'type' => 'success',
            'message' => "Counter increased to {$this->count}!"
        ]);
    }

    #[LiveAction]
    public function decrease(): void
    {
        $this->count--;

        $type = $this->count < 0 ? 'danger' : 'info';
        $message = $this->count < 0
            ? "Counter is now negative: {$this->count}"
            : "Counter decreased to {$this->count}";

        $this->emit('toast:add', [
            'type' => $type,
            'message' => $message
        ]);
    }

    #[LiveAction]
    public function reset(): void
    {
        $this->count = 0;

        $this->emit('toast:add', [
            'type' => 'warning',
            'message' => 'Counter has been reset to 0!'
        ]);
    }
}
