<?php

declare(strict_types=1);

namespace App\Observer;

use App\Observer\Observer;

class Logger implements Observer
{
    public function update(string $event): void
    {
        echo "[Logger] Logging event: $event\n";
    }
}