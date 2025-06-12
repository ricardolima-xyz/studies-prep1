<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\CatalogService;
use App\Model\Product;
use App\Model\ProductId;

$catalogService = new CatalogService();
$catalogService->addProduct(new Product(new ProductId(uniqid()), 'Laptop', 999.99));
$catalogService->addProduct(new Product(new ProductId(uniqid()), 'Smartphone', 499.99));
$catalogService->addProduct(new Product(new ProductId(uniqid()), 'Tablet', 299.99));
$catalogService->addProduct(new Product(new ProductId(uniqid()), 'Smartwatch', 199.99));
$catalogService->addProduct(new Product(new ProductId(uniqid()), 'Headphones', 89.99));

$products = $catalogService->getAllProducts();
foreach ($products as $product) {
    echo "Product ID: " . $product->getId() . PHP_EOL;
    echo "Name: " . $product->getName() . PHP_EOL;
    echo "Price: " . $product->getFormattedPrice() . PHP_EOL;
    echo "------------------------\n";
}
