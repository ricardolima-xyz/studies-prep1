<?php
declare(strict_types=1);

namespace App\Ticket;

use App\Ticket\Ticket;

interface TicketHandler
{
    public function setNext(TicketHandler $handler): TicketHandler;
    public function handle(Ticket $ticket): ?string;
}