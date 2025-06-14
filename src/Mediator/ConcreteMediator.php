<?php
declare(strict_types=1);

namespace App\Mediator;

class ConcreteMediator implements Mediator
{
    private Component1 $component1;
    private Component2 $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 = $c1;
        $this->component2 = $c2;
    }

    public function notify(object $sender, string $event): void
    {
        if ($event === "A") {
            echo "Mediator reacts on A and triggers following operations:\n";
            $this->component2->doC();
        }
        if ($event === "D") {
            echo "Mediator reacts on D and triggers following operations:\n";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}
