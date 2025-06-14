<?php

declare(strict_types=1);

namespace App\Interpreter;

class MinusExpression implements Expression
{
    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(): int
    {
        return $this->left->interpret() - $this->right->interpret();
    }
}
