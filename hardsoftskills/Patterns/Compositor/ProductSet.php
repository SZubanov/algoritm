<?php

namespace Patterns\Compositor;

use SplObjectStorage;

class ProductSet implements ProductInterface
{
    private SplObjectStorage $products;

    public function __construct()
    {
        $this->products = new SplObjectStorage();
    }

    public function addProduct(ProductInterface $product): void
    {
        $this->products->attach($product);
    }

    public function getPrice(): float
    {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }
}