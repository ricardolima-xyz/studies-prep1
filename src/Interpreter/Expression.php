<?php

declare(strict_types=1);

namespace App\Interpreter;

interface Expression
{
    public function interpret(): int;
}