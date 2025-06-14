#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Interpreter\NumberExpression;
use App\Interpreter\PlusExpression;
use App\Interpreter\MinusExpression;

// Represent expression: (5 + 3) - 2

$five = new NumberExpression(5);
$three = new NumberExpression(3);
$two = new NumberExpression(2);

$addition = new PlusExpression($five, $three);      // 5 + 3
$expression = new MinusExpression($addition, $two); // (5 + 3) - 2

echo $expression->interpret(); // Should output 6
