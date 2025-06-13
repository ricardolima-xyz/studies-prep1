<?php

declare(strict_types=1);

namespace App\Iterator;

use App\Iterator\Iterator;
use App\Iterator\BookCollection;

class BookIterator implements Iterator
{
    private BookCollection $collection;
    private int $position = 0;

    public function __construct(BookCollection $collection)
    {
        $this->collection = $collection;
    }

    public function current()
    {
        $books = $this->collection->getBooks();
        return $books[$this->position] ?? null;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        $books = $this->collection->getBooks();
        return isset($books[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
