<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\UIFactory;
use App\UI\Button;
use App\UI\Checkbox;

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
