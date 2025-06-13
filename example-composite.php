<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

$basePrice = new BasePrice(100.00);
$withShipping = new ShippingDecorator($basePrice, 15.00);

echo 'Final Price with Shipping: $' . number_format($withShipping->calculate(), 2);

$withTax = new TaxDecorator($withShipping, 0.2);
echo "\nFinal Price with Shipping and Tax: $" . number_format($withTax->calculate(), 2);
// Output: