#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Flyweight\Forest;

$forest = new Forest();
$forest->plantTree(1, 2, "Oak", "Green", "Rough");
$forest->plantTree(3, 4, "Pine", "Dark Green", "Smooth");
$forest->plantTree(5, 6, "Oak", "Green", "Rough");  // Reuses Oak TreeType

$forest->draw();