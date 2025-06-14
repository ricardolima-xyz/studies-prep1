<?php
declare(strict_types=1);

namespace App\Mediator;

class Component1
{
    private Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function doA(): void
    {
        echo "Component1 does A.\n";
        $this->mediator->notify($this, "A");
    }

    public function doB(): void
    {
        echo "Component1 does B.\n";
        $this->mediator->notify($this, "B");
    }
}