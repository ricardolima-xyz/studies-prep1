<?php

declare(strict_types=1);

namespace App\UI;

interface UIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
