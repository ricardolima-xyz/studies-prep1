<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\ProductId;
use App\Discount\DiscountStrategy;
use App\Discount\NoDiscountStrategy;

class Product
{
    private ProductId $id;
    private string $name;
    private float $price;
    private DiscountStrategy $discountStrategy;

    public function __construct(ProductId $id, string $name, float $price, ?DiscountStrategy $strategy = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->discountStrategy = $strategy ?? new NoDiscountStrategy();
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

    public function setDiscountStrategy(DiscountStrategy $strategy): void
    {
        $this->discountStrategy = $strategy;
    }

    public function getDiscountedPrice(): float
    {
        return $this->discountStrategy->apply($this->price);
    }

    public function getFormattedDiscountedPrice(): string
    {
        return '$ '.number_format($this->getDiscountedPrice(), 2);
    }

    public function getDiscountLabel(): string
    {
        return (new \ReflectionClass($this->discountStrategy))->getShortName();
    }
}