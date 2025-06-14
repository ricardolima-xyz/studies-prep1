<?php
declare(strict_types=1);

namespace App\Mediator;

class Component2
{
    private Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function doC(): void
    {
        echo "Component2 does C.\n";
        $this->mediator->notify($this, "C");
    }

    public function doD(): void
    {
        echo "Component2 does D.\n";
        $this->mediator->notify($this, "D");
    }
}
