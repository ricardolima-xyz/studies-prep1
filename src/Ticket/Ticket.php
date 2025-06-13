<?php
declare(strict_types=1);

namespace App\Ticket;

class Ticket
{
    public function __construct(
        public string $title,
        public int $priority // 1 = low, 2 = medium, 3 = high
    ) {}
}