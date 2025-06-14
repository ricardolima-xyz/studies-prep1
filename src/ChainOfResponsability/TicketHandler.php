<?php
declare(strict_types=1);

namespace App\ChainOfResponsability;

use App\ChainOfResponsability\Ticket;

interface TicketHandler
{
    public function setNext(TicketHandler $handler): TicketHandler;
    public function handle(Ticket $ticket): ?string;
}