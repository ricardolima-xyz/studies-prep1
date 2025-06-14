#!/usr/bin/env php
<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\FactoryMethod\CatalogService;
use App\FactoryMethod\ProductFactory;

$catalogService = new CatalogService();

$productData = [
    ['id' => '1', 'name' => 'Laptop', 'price' => 999.99],
    ['id' => '2', 'name' => 'Smartphone', 'price' => 499.99],
    ['id' => '3', 'name' => 'Tablet', 'price' => 299.99],
    ['id' => '4', 'name' => 'Smartwatch', 'price' => 199.99],
    ['id' => '5', 'name' => 'Headphones', 'price' => 89.99],
];

foreach ($productData as $data) {
    $catalogService->addProduct(ProductFactory::fromArray($data));
}

$products = $catalogService->getAllProducts();
foreach ($products as $product) {
    echo "Product ID: " . $product->getId() . PHP_EOL;
    echo "Name: " . $product->getName() . PHP_EOL;
    echo "Price: " . $product->getFormattedPrice() . PHP_EOL;
    echo "------------------------\n";
}
