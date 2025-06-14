<?php

declare(strict_types=1);

namespace App\Decorator;

abstract class BeverageDecorator implements Beverage
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function getDescription(): string;

    abstract public function getCost(): float;
}