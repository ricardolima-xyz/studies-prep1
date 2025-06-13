<?php
declare(strict_types=1);

namespace App\Ticket;
use App\Ticket\Ticket;
use App\Ticket\TicketHandler;


class Level1Support implements TicketHandler
{
    private ?TicketHandler $next = null;

    public function setNext(TicketHandler $handler): TicketHandler
    {
        $this->next = $handler;
        return $handler;
    }

    public function handle(Ticket $ticket): ?string
    {
        if ($ticket->priority === 1) {
            return "Level 1 Support handled ticket: {$ticket->title}";
        }

        if ($this->next) {
            return $this->next->handle($ticket);
        }

        return null;
    }
}
