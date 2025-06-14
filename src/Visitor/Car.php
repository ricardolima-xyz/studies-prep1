<?php
namespace App\Visitor;

class Car implements CarPart
{
    private array $parts;

    public function __construct()
    {
        $this->parts = [
            new Wheel('front left'),
            new Wheel('front right'),
            new Wheel('back left'),
            new Wheel('back right'),
            new Body(),
            new Engine(),
        ];
    }

    public function accept(CarPartVisitor $visitor): void
    {
        foreach ($this->parts as $part) {
            $part->accept($visitor);
        }
        // Car itself can also accept visitor if needed, e.g. $visitor->visitCar($this);
    }
}
