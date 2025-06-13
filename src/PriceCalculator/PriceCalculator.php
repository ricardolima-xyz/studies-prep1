<?php

declare(strict_types=1);

namespace App\PriceCalculator;

interface PriceCalculator
{
    public function calculate(): float;
}