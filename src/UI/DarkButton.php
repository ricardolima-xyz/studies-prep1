<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\Button;

class DarkButton implements Button
{
    public function render(): void
    {
        echo "[Dark Theme] Rendering a dark button...\n";
    }
}