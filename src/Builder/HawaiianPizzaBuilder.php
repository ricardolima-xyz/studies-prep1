<?php

declare(strict_types=1);

namespace App\Builder;

use App\Builder\PizzaBuilderInterface;
use App\Builder\Pizza;

class HawaiianPizzaBuilder implements PizzaBuilderInterface
{
    private Pizza $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function buildDough(): void
    {
        $this->pizza->setDough('cross');
    }

    public function buildSauce(): void
    {
        $this->pizza->setSauce('mild');
    }

    public function buildToppings(): void
    {
        $this->pizza->addTopping('ham');
        $this->pizza->addTopping('pineapple');
    }

    public function getPizza(): Pizza
    {
        return $this->pizza;
    }
}
