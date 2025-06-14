<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\Checkbox;

class LightCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "[Light Theme] Rendering a light checkbox...\n";
    }
}
