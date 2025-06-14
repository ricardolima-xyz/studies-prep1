<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\ChainOfResponsability\Ticket;
use App\ChainOfResponsability\Level1Support;
use App\ChainOfResponsability\Level2Support;
use App\ChainOfResponsability\Level3Support;


// Instantiate handlers
$level1 = new Level1Support();
$level2 = new Level2Support();
$level3 = new Level3Support();

// Chain them: L1 -> L2 -> L3
$level1->setNext($level2)->setNext($level3);

// Tickets
$tickets = [
    new Ticket('Password reset', 1),
    new Ticket('Software installation', 2),
    new Ticket('Server down', 3),
    new Ticket('Unknown issue', 4),
];

foreach ($tickets as $ticket) {
    $result = $level1->handle($ticket);
    if ($result === null) {
        echo "No one could handle ticket: {$ticket->title}\n";
    } else {
        echo $result . PHP_EOL;
    }
}