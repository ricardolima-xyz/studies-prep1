<?php

namespace App\Bridge;

class TV implements Device
{
    public function turnOn(): void
    {
        echo "Turning on the TV\n";
    }

    public function turnOff(): void
    {
        echo "Turning off the TV\n";
    }

    public function setVolume(int $volume): void
    {
        echo "Setting TV volume to {$volume}\n";
    }
}
