<?php

declare(strict_types=1);

namespace App\Discount;

class AbsoluteValueDiscountStrategy implements DiscountStrategy
{
    private float $discountAmount;

    public function __construct(float $discountAmount)
    {
        if ($discountAmount < 0) {
            throw new \InvalidArgumentException('Discount amount must be non-negative.');
        }
        $this->discountAmount = $discountAmount;
    }

    public function apply(float $price): float
    {
        return max(0, $price - $this->discountAmount);
    }
}