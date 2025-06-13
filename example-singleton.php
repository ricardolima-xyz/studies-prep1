<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';


//use App\Core\Config;
//$config = Config::getInstance(['env' => 'production', 'debug' => false]);
//echo $config->get('env'); // production

use App\Core\Configuration;
$configuration = Configuration::getInstance();
$configuration->set('env', 'production');
echo $configuration->get('env'); // production
