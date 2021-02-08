<?php 

require_once "data/Product.php";


$product = new Product("Apple", 2000);

echo $product->getName();
echo $product->getPrice();

$dummy = new ProductDummy("Wine", 1000);
echo $dummy->info();