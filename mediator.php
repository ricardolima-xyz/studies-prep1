#!/usr/bin/env php
<?php
require_once 'vendor/autoload.php';

use App\Mediator\Component1;
use App\Mediator\Component2;
use App\Mediator\ConcreteMediator;

// Step 1: Create components first
$component1 = new Component1();
$component2 = new Component2();

// Step 2: Create mediator, passing components
$mediator = new ConcreteMediator($component1, $component2);

// Step 3: Inject mediator back into components
$component1->setMediator($mediator);
$component2->setMediator($mediator);

// Step 4: Run
$component1->doA();
echo PHP_EOL;
$component2->doD();
