<?php

declare(strict_types=1);

namespace App\Memento;

class History
{
    /** @var Memento[] */
    private array $history = [];

    public function push(Memento $memento): void
    {
        $this->history[] = $memento;
    }

    public function pop(): ?Memento
    {
        return array_pop($this->history);
    }
}