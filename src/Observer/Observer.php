<?php

declare(strict_types=1);

namespace App\Observer;

interface Observer
{
    public function update(string $event): void;
}