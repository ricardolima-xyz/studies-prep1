<?php

declare(strict_types=1);

namespace App\Flyweight;

class TreeType
{
    public function __construct(
        private string $name,
        private string $color,
        private string $texture
    ) {}

    public function draw(int $x, int $y): void
    {
        echo "Drawing tree type [{$this->name}] at position ({$x}, {$y}) with color {$this->color} and texture {$this->texture}\n";
    }
}