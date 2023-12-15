<?php

namespace Patterns\Strategy;

class DiscountCalculator
{
    public function __construct(private readonly DiscountStrategyInterface $strategy)
    {
    }

    public function calculateDiscount(float $amount): float
    {
        return $this->strategy->calculateDiscount($amount);
    }
}