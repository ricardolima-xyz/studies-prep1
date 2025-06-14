<?php

declare(strict_types=1);
namespace App\Strategy;

interface DiscountStrategy
{
    public function apply(float $price): float;
}
