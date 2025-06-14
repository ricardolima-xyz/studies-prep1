<?php

declare(strict_types=1);

namespace App\Builder;

use App\Builder\PizzaBuilderInterface;
use App\Builder\Pizza;

class PizzaDirector
{
    private PizzaBuilderInterface $builder;

    public function setBuilder(PizzaBuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function buildPizza(): Pizza
    {
        $this->builder->buildDough();
        $this->builder->buildSauce();
        $this->builder->buildToppings();

        return $this->builder->getPizza();
    }
}
