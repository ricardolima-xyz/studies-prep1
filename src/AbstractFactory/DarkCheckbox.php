<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\Checkbox;

class DarkCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "[Dark Theme] Rendering a dark checkbox...\n";
    }
}