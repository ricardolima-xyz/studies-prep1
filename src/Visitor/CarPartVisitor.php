<?php

declare(strict_types=1);

namespace App\Visitor;

// Visitor interface: defines a visit method for each concrete element
interface CarPartVisitor
{
    public function visitWheel(Wheel $wheel): void;
    public function visitEngine(Engine $engine): void;
    public function visitBody(Body $body): void;
}