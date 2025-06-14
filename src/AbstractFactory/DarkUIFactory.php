<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\UIFactory;
use App\AbstractFactory\Button;
use App\AbstractFactory\Checkbox;

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