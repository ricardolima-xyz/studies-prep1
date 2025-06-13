<?php

declare(strict_types=1);
namespace App\Discount;

interface DiscountStrategy
{
    public function apply(float $price): float;
}
