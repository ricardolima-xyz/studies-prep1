<?php

declare(strict_types=1);

namespace App\Composite;

interface PriceCalculator
{
    public function calculate(): float;
}