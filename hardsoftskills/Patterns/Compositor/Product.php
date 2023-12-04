<?php

namespace Patterns\Compositor;

use Patterns\Compositor\ProductInterface;

class Product implements ProductInterface
{
    public function __construct(private readonly float $price)
    {
    }

    public function getPrice(): float
    {
       return $this->price;
    }
}