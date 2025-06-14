<?php

declare(strict_types=1);

namespace App\Prototype;

interface Prototype
{
    public function clone(): Prototype;
}