<?php

declare(strict_types=1);

namespace App\Observer;

use App\Observer\Observer;

class EmailNotifier implements Observer
{
    public function update(string $event): void
    {
        echo "[EmailNotifier] Sending email: $event\n";
    }
}