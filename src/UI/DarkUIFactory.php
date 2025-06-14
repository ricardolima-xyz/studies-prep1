<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\UIFactory;
use App\UI\Button;
use App\UI\Checkbox;

class DarkUIFactory implements UIFactory
{
    public function createButton(): Button
    {
        return new DarkButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new DarkCheckbox();
    }
}