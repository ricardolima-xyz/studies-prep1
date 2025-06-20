<?php
declare(strict_types=1);

namespace App\ChainOfResponsability;

use App\ChainOfResponsability\Ticket;
use App\ChainOfResponsability\TicketHandler;

class Level2Support implements TicketHandler
{
    private ?TicketHandler $next = null;

    public function setNext(TicketHandler $handler): TicketHandler
    {
        $this->next = $handler;
        return $handler;
    }

    public function handle(Ticket $ticket): ?string
    {
        if ($ticket->priority === 2) {
            return "Level 2 Support handled ticket: {$ticket->title}";
        }

        if ($this->next) {
            return $this->next->handle($ticket);
        }

        return null;
    }
}