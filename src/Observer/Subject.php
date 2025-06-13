<?php

declare(strict_types=1);

namespace App\Observer;

use App\Observer\Observer;

interface Subject
{
    public function attach(Observer $observer): void;

    public function detach(Observer $observer): void;

    public function notify(string $event): void;
}
