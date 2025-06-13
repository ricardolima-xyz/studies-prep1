<?php

declare(strict_types=1);

namespace App\Template;

abstract class CaffeineBeverage {

    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew(): void;

    abstract protected function addCondiments(): void;

    private function boilWater(): void
    {
        echo "Boiling water...\n";
    }

    private function pourInCup(): void
    {
        echo "Pouring into cup...\n";
    }
}