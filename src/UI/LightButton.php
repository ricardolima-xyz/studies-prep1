<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\Button;

class LightButton implements Button
{
    public function render(): void
    {
        echo "[Light Theme] Rendering a light button...\n";
    }
}