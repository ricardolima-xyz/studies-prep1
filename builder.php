<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Builder\PizzaDirector;
use App\Builder\HawaiianPizzaBuilder;

$director = new PizzaDirector();
$builder = new HawaiianPizzaBuilder();

$director->setBuilder($builder);
$pizza = $director->buildPizza();
$pizza->describe();