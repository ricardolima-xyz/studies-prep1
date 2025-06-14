<?php

declare(strict_types=1);

namespace App\Composite;

class TaxDecorator implements PriceCalculator
{
    private PriceCalculator $calculator;
    private float $taxRate; // e.g. 0.2 for 20%

    public function __construct(PriceCalculator $calculator, float $taxRate)
    {
        $this->calculator = $calculator;
        $this->taxRate = $taxRate;
    }

    public function calculate(): float
    {
        $base = $this->calculator->calculate();
        return $base + ($base * $this->taxRate);
    }
}