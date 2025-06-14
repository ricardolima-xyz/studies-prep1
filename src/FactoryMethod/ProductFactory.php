<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\FactoryMethod\Product;
use App\FactoryMethod\ProductId;
use InvalidArgumentException;

class ProductFactory
{
    public static function fromArray(array $data): Product
    {
        if (!isset($data['id'], $data['name'], $data['price'])) {
            throw new InvalidArgumentException('Missing required product fields.');
        }

        if (!is_string($data['id']) || trim($data['id']) === '') {
            throw new InvalidArgumentException('Product ID must be a non-empty string.');
        }

        if (!is_string($data['name']) || trim($data['name']) === '') {
            throw new InvalidArgumentException('Product name must be a non-empty string.');
        }

        if (!is_numeric($data['price']) || (float)$data['price'] < 0) {
            throw new InvalidArgumentException('Product price must be a positive number.');
        }

        return new Product(
            new ProductId($data['id']),
            $data['name'],
            (float)$data['price']
        );
    }
}