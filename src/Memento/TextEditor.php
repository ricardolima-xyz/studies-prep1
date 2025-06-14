<?php

declare(strict_types=1);

namespace App\Memento;

class TextEditor
{
    private string $text = '';

    public function write(string $words): void
    {
        $this->text .= $words;
    }

    public function getContent(): string
    {
        return $this->text;
    }

    public function save(): Memento
    {
        return new Memento($this->text);
    }

    public function restore(Memento $memento): void
    {
        $this->text = $memento->getState();
    }
}