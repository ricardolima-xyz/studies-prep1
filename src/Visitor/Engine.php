<?php

declare(strict_types=1);

namespace App\Visitor;

class Engine implements CarPart
{
    public function accept(CarPartVisitor $visitor): void
    {
        $visitor->visitEngine($this);
    }
}