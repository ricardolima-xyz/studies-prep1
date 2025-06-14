<?php

declare(strict_types=1);

namespace App\Visitor;

// Element interface: car parts implement this
interface CarPart
{
    public function accept(CarPartVisitor $visitor): void;
}