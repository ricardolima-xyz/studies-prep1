<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\UIFactory;
use App\AbstractFactory\Button;
use App\AbstractFactory\Checkbox;

class LightUIFactory implements UIFactory
{
    public function createButton(): Button
    {
        return new LightButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new LightCheckbox();
    }
}
