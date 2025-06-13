<?php

declare(strict_types=1);

namespace App\Template;

use App\Template\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    protected function brew(): void
    {
        echo "Dripping coffee through filter...\n";
    }

    protected function addCondiments(): void
    {
        echo "Adding sugar and milk...\n";
    }
}