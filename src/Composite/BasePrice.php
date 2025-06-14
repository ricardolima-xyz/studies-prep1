<?php

declare(strict_types=1);

namespace App\Composite;

use App\Composite\PriceCalculator;

use InvalidArgumentException;

/**
* Class BasePrice
*
* Represents a base price for a product.
*/
class BasePrice implements PriceCalculator
{
    private float $price;

    public function __construct(float $price)
    {
        if ($price < 0) {
            throw new InvalidArgumentException('Price cannot be negative.');
        }
        $this->price = $price;
    }

    public function calculate(): float
    {
        return $this->price;
    }

}
