<?php

declare(strict_types=1);

namespace App\Command\Device;

class Light
{
    public function turnOn(): void
    {
        echo "💡 Light is ON\n";
    }

    public function turnOff(): void
    {
        echo "💡 Light is OFF\n";
    }
}
