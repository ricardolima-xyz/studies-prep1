<?php

declare(strict_types=1);

namespace App\Prototype;

use App\Prototype\Prototype;

class Book implements Prototype
{
    private string $title;
    private string $author;
    private array $chapters;

    public function __construct(string $title, string $author, array $chapters = [])
    {
        $this->title = $title;
        $this->author = $author;
        $this->chapters = $chapters;
    }

    public function addChapter(string $chapter): void
    {
        $this->chapters[] = $chapter;
    }

    public function show(): void
    {
        echo "Book: {$this->title} by {$this->author}\n";
        foreach ($this->chapters as $index => $chapter) {
            echo "  Chapter ".($index + 1).": $chapter\n";
        }
    }

    public function clone(): Book
    {
        // Deep copy if needed
        return new self($this->title, $this->author, $this->chapters);
    }
}
