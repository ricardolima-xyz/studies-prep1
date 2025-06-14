<?php

declare(strict_types=1);

namespace App\Flyweight;

class Forest
{
    /** @var Tree[] */
    private array $trees = [];

    public function plantTree(int $x, int $y, string $name, string $color, string $texture): void
    {
        $type = TreeTypeFactory::getTreeType($name, $color, $texture);
        $this->trees[] = new Tree($x, $y, $type);
    }

    public function draw(): void
    {
        foreach ($this->trees as $tree) {
            $tree->draw();
        }
    }
}
