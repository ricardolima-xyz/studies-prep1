#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Visitor\Car;
use App\Visitor\CarPartPrintVisitor;

$car = new Car();
$visitor = new CarPartPrintVisitor();

$car->accept($visitor);
