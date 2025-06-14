<?php

declare(strict_types=1);

namespace App\AbstractFactory;

interface UIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
