<?php

declare(strict_types=1);

namespace App\Iterator;

use App\Iterator\Iterator;

interface Aggregate
{
    public function createIterator(): Iterator;
}