<?php

namespace Patterns\Strategy;

class PercentageDiscount implements DiscountStrategyInterface
{
    public function __construct(private readonly float $percentage)
    {
    }

    public function calculateDiscount(float $amount): float
    {
        return $amount * ($this->percentage / 100);
    }
}