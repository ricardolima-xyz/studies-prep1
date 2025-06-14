<?php

namespace App\Bridge;

class Radio implements Device
{
    public function turnOn(): void
    {
        echo "Turning on the Radio\n";
    }

    public function turnOff(): void
    {
        echo "Turning off the Radio\n";
    }

    public function setVolume(int $volume): void
    {
        echo "Setting Radio volume to {$volume}\n";
    }
}
