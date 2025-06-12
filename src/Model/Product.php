<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\ProductId;

class Product
{
    private ProductId $id;
    private string $name;
    private float $price;

    public function __construct(ProductId $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() : ProductId
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getFormattedPrice() : string
    {
        return '$ '.number_format($this->price, 2);
    }
}