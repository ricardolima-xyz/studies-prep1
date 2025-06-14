<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Prototype\Book;

$original = new Book("Design Patterns", "Erich Gamma");
$original->addChapter("Introduction");
$original->addChapter("Strategy Pattern");
$original->addChapter("Observer Pattern");

echo "--- Original Book ---\n";
$original->show();

// Clone the book
$cloned = $original->clone();
$cloned->addChapter("Prototype Pattern");

echo "\n--- Cloned Book (modified) ---\n";
$cloned->show();

echo "\n--- Original Book (should be unchanged) ---\n";
$original->show();
