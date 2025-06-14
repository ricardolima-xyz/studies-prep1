<?php

declare(strict_types=1);

namespace App\Builder;

class Pizza
{
    private string $dough = '';
    private string $sauce = '';
    private array $toppings = [];

    public function setDough(string $dough): void
    {
        $this->dough = $dough;
    }

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function addTopping(string $topping): void
    {
        $this->toppings[] = $topping;
    }

    public function describe(): void
    {
        echo "Dough: {$this->dough}\n";
        echo "Sauce: {$this->sauce}\n";
        echo "Toppings: " . implode(', ', $this->toppings) . "\n";
    }
}
