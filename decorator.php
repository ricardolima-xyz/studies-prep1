#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Decorator\Espresso;
use App\Decorator\Milk;
use App\Decorator\Mocha;

// Start with a plain Espresso
$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . number_format($beverage->getCost(), 2) . PHP_EOL;

// Add Milk
$beverage = new Milk($beverage);
echo $beverage->getDescription() . ' $' . number_format($beverage->getCost(), 2) . PHP_EOL;

// Add Mocha
$beverage = new Mocha($beverage);
echo $beverage->getDescription() . ' $' . number_format($beverage->getCost(), 2) . PHP_EOL;

// Add another Mocha (stack decorators!)
$beverage = new Mocha($beverage);
echo $beverage->getDescription() . ' $' . number_format($beverage->getCost(), 2) . PHP_EOL;
