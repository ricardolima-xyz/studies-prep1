<?php

declare(strict_types=1);

namespace App\Command;

interface Command
{
    public function execute(): void;
}