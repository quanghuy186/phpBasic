<?php
include './Services/ProductManager.php';
include './Models/Product.php';

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("laptop", 100));

$products = $productManager->getProduct();

foreach ($products as $product) {
    echo $product->getName() . $product->getPrice();
}   