<?php

namespace App\Bridge;

abstract class RemoteControl
{
    protected Device $device; // THIS is the bridge!

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function turnOn(): void
    {
        $this->device->turnOn();
    }

    public function turnOff(): void
    {
        $this->device->turnOff();
    }

    public function setVolume(int $volume): void
    {
        $this->device->setVolume($volume);
    }
}
