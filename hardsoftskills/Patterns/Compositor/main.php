<?php

use Patterns\Compositor\Product;
use Patterns\Compositor\ProductSet;

require_once 'ProductInterface.php';
require_once 'Product.php';
require_once 'ProductSet.php';

$singleProduct1 = new Product(50.0);
$singleProduct2 = new Product(30.0);

$productGroup = new ProductSet();
$productGroup->addProduct($singleProduct1);
$productGroup->addProduct($singleProduct2);

$totalPrice = $productGroup->getPrice();

echo "Total Price: $totalPrice";

