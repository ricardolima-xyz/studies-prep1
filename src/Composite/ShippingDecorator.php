<?php

declare(strict_types=1);
namespace App\Composite;
use InvalidArgumentException;
/**
 * Class ShippingDecorator
 *
 * Decorates a PriceCalculator to add shipping costs.
 */
class ShippingDecorator implements PriceCalculator
{
    private PriceCalculator $calculator;
    private float $shippingCost;

    public function __construct(PriceCalculator $calculator, float $shippingCost)
    {
        if ($shippingCost < 0) {
            throw new InvalidArgumentException('Shipping cost cannot be negative.');
        }
        $this->calculator = $calculator;
        $this->shippingCost = $shippingCost;
    }

    public function calculate(): float
    {
        return $this->calculator->calculate() + $this->shippingCost;
    }
}