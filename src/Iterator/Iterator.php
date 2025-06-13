<?php

declare(strict_types=1);

namespace App\Iterator;

interface Iterator
{
    public function current();
    public function next(): void;
    public function key();
    public function valid(): bool;
    public function rewind(): void;
}