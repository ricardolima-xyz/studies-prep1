<?php

declare(strict_types=1);

namespace App\Decorator;

class Mocha extends BeverageDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 0.50;
    }
}
