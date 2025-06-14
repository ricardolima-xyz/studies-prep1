<?php

declare(strict_types=1);

namespace App\Strategy;

class PercentageDiscountStrategy implements DiscountStrategy
{
    private float $percentage;

    public function __construct(float $percentage)
    {
        if ($percentage < 0 || $percentage > 100) {
            throw new \InvalidArgumentException('Percentage must be between 0 and 100.');
        }
        $this->percentage = $percentage;
    }

    public function apply(float $price): float
    {
        return $price - ($price * ($this->percentage / 100));
    }
}