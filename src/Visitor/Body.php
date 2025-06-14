<?php

declare(strict_types=1);

namespace App\Visitor;

class Body implements CarPart
{
    public function accept(CarPartVisitor $visitor): void
    {
        $visitor->visitBody($this);
    }
}
