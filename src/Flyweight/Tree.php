<?php

declare(strict_types=1);

namespace App\Flyweight;

class Tree
{
    public function __construct(
        private int $x,
        private int $y,
        private TreeType $type
    ) {}

    public function draw(): void
    {
        $this->type->draw($this->x, $this->y);
    }
}
