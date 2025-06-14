<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Command\Device\Light;
use App\Command\Device\MusicPlayer;
use App\Command\TurnLightOnCommand;
use App\Command\TurnLightOffCommand;
use App\Command\PlayMusicCommand;
use App\Command\StopMusicCommand;
use App\Command\RemoteControl;

$light = new Light();
$musicPlayer = new MusicPlayer();

$turnLightOnCommand = new TurnLightOnCommand($light);
$turnLightOffCommand = new TurnLightOffCommand($light);
$playMusicCommand = new PlayMusicCommand($musicPlayer);
$stopMusicCommand = new StopMusicCommand($musicPlayer);

$remoteControl = new RemoteControl();
$remoteControl->setCommand(1, $turnLightOnCommand);
$remoteControl->setCommand(2, $turnLightOffCommand);
$remoteControl->setCommand(3, $playMusicCommand);
$remoteControl->setCommand(4, $stopMusicCommand);
$remoteControl->pressButton(1);
$remoteControl->pressButton(2);
$remoteControl->pressButton(3);
$remoteControl->pressButton(4);
$remoteControl->pressButton(5); // Invalid button