#!/usr/bin/env php
<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Composite\BasePrice;
use App\Composite\ShippingDecorator;
use App\Composite\TaxDecorator;

// Example usage of the PriceCalculator with decorators
$basePrice = new BasePrice(100.00);
$withShipping = new ShippingDecorator($basePrice, 15.00);

echo 'Final Price with Shipping: $' . number_format($withShipping->calculate(), 2) . PHP_EOL;

$withTax = new TaxDecorator($withShipping, 0.2);
echo "Final Price with Shipping and Tax: $" . number_format($withTax->calculate(), 2) . PHP_EOL;
// Output: