<?php

declare(strict_types=1);

namespace App\Interpreter;

class NumberExpression implements Expression
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function interpret(): int
    {
        return $this->number;
    }
}
