<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

// This example reuses code from the Factory Method pattern to create products,
// demonstrating how to apply different discount strategies to products in a catalog.
// Together with Strategy design pattern, this example demonstrates the use of the Value Objects

use App\FactoryMethod\CatalogService;
use App\FactoryMethod\ProductId;
use App\FactoryMethod\ProductFactory;
use App\Strategy\NoDiscountStrategy;
use App\Strategy\PercentageDiscountStrategy;
use App\Strategy\AbsoluteValueDiscountStrategy;

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

$catalogService->getProduct(new ProductId('1'))->setDiscountStrategy(
    new PercentageDiscountStrategy(10.0)
);

$catalogService->getProduct(new ProductId('3'))->setDiscountStrategy(
    new AbsoluteValueDiscountStrategy(99.99)
);

$catalogService->getProduct(new ProductId('4'))->setDiscountStrategy(
    new NoDiscountStrategy()
);

$products = $catalogService->getAllProducts();
foreach ($products as $product) {
    echo "Product ID: " . $product->getId() . PHP_EOL;
    echo "Name: " . $product->getName() . PHP_EOL;
    echo "Price: " . $product->getFormattedPrice() . PHP_EOL;
    echo "Discounted Price: " . $product->getFormattedDiscountedPrice() . PHP_EOL;
    echo "Discount Label: " . $product->getDiscountLabel() . PHP_EOL;
    echo "------------------------\n";
}
