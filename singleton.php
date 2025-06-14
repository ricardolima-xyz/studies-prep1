#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';


//use App\Singleton\Config;
//$config = Config::getInstance(['env' => 'production', 'debug' => false]);
//echo $config->get('env'); // production

use App\Singleton\Configuration;
$configuration = Configuration::getInstance();
$configuration->set('env', 'production');
echo $configuration->get('env'); // production
