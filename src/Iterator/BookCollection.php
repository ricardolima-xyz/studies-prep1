<?php

declare(strict_types=1);

namespace App\Iterator;

use App\Iterator\Aggregate;
use App\Iterator\Iterator;
use App\Iterator\Book;
use App\Iterator\BookIterator;

class BookCollection implements Aggregate
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function createIterator(): Iterator
    {
        return new BookIterator($this);
    }
}