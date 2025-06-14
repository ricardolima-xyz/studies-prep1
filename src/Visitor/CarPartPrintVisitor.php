<?php

declare(strict_types=1);

namespace App\Visitor;

class CarPartPrintVisitor implements CarPartVisitor
{
    public function visitWheel(Wheel $wheel): void
    {
        echo "Visiting wheel: " . $wheel->getName() . PHP_EOL;
    }

    public function visitEngine(Engine $engine): void
    {
        echo "Visiting engine" . PHP_EOL;
    }

    public function visitBody(Body $body): void
    {
        echo "Visiting body" . PHP_EOL;
    }
}
