<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\Button;

class DarkButton implements Button
{
    public function render(): void
    {
        echo "[Dark Theme] Rendering a dark button...\n";
    }
}