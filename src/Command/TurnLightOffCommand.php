<?php

declare(strict_types=1);

namespace App\Command;

use App\Device\Light;
use App\Command\Command;

class TurnLightOffCommand implements Command
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->turnOff();
    }
}