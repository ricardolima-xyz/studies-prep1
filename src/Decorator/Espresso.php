<?php

declare(strict_types=1);

namespace App\Decorator;

class Espresso implements Beverage
{
    public function getDescription(): string
    {
        return "Espresso";
    }

    public function getCost(): float
    {
        return 1.99;
    }
}
