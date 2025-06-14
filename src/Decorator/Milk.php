<?php

declare(strict_types=1);

namespace App\Decorator;

class Milk extends BeverageDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Milk';
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 0.30;
    }
}