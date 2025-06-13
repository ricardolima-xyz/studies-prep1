<?php

declare(strict_types=1);

namespace App\Facade;

interface Codec
{
    public function getType(): string;
}
