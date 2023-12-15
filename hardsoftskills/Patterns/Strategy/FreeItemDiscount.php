<?php

namespace Patterns\Strategy;

class FreeItemDiscount implements DiscountStrategyInterface
{
    public function __construct(private readonly float $freeAmount)
    {
    }

    public function calculateDiscount(float $amount): float
    {
        return $amount;
    }
}