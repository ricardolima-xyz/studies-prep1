<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\Checkbox;

class DarkCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "[Dark Theme] Rendering a dark checkbox...\n";
    }
}