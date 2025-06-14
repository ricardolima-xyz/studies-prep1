<?php
declare(strict_types=1);

namespace App\Mediator;

interface Mediator
{
    public function notify(object $sender, string $event): void;
}