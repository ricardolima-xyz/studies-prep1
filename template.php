#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Template\Coffee;
use App\Template\Tea;

$coffee = new Coffee();
$coffee->prepareRecipe();
$tea = new Tea();
$tea->prepareRecipe();