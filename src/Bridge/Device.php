<?php

namespace App\Bridge;

interface Device
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function setVolume(int $volume): void;
}