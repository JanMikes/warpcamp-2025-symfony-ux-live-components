<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class LiveCounterComponent
{
    use DefaultActionTrait;

    #[LiveProp]
    public int $count = 0;

    #[LiveAction]
    public function increase(): void
    {
        $this->count++;
    }

    #[LiveAction]
    public function decrease(): void
    {
        $this->count--;
    }

    #[LiveAction]
    public function reset(): void
    {
        $this->count = 0;
    }
}
