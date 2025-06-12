<?php

declare(strict_types=1);

namespace App\Model;

class ProductId
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function __toString() : string
    {
        return $this->id;
    }
}