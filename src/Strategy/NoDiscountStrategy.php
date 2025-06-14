<?php

declare(strict_types=1);

namespace App\Strategy;

class NoDiscountStrategy implements DiscountStrategy
{
    public function apply(float $price): float
    {
        return $price;
    }
}