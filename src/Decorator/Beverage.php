<?php

declare(strict_types=1);

namespace App\Decorator;

interface Beverage
{
    public function getDescription(): string;
    public function getCost(): float;
}