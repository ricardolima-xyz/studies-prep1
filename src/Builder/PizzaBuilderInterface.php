<?php

declare(strict_types=1);

namespace App\Builder;

interface PizzaBuilderInterface
{
    public function buildDough(): void;
    public function buildSauce(): void;
    public function buildToppings(): void;
    public function getPizza(): Pizza;
}
