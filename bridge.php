<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Bridge\TV;
use App\Bridge\AdvancedRemoteControl;

$tv = new TV();
$remote = new AdvancedRemoteControl($tv);

$remote->turnOn();
$remote->setVolume(25);
$remote->mute();
$remote->turnOff();
