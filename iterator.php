#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Iterator\Book;
use App\Iterator\BookCollection;

$collection = new BookCollection();
$collection->addBook(new Book('Design Patterns'));
$collection->addBook(new Book('Clean Code'));
$collection->addBook(new Book('Refactoring'));

$iterator = $collection->createIterator();

for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
    $book = $iterator->current();
    echo $book->getTitle() . PHP_EOL;
}