<?php

declare(strict_types=1);

namespace App\Visitor;

class Wheel implements CarPart
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function accept(CarPartVisitor $visitor): void
    {
        $visitor->visitWheel($this);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
