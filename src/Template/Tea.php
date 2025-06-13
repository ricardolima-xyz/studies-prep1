<?php

declare(strict_types=1);

namespace App\Template;

use App\Template\CaffeineBeverage;


class Tea extends CaffeineBeverage
{
    protected function brew(): void
    {
        echo "Steeping the tea...\n";
    }

    protected function addCondiments(): void
    {
        echo "Adding lemon...\n";
    }
}
