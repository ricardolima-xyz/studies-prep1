<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Product;
use App\FactoryMethod\ProductId;

class CatalogService
{
    /** @var Product[] */
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product) : void
    {
        $this->products[(string) $product->getId()] = $product;
    }

    public function getProduct(ProductId $id) : ?Product
    {
        return isset($this->products[(string) $id]) ? $this->products[(string) $id] : null;
    }

    public function getAllProducts() : array
    {
        return array_values($this->products);
    }
}