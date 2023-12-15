<?php

namespace Patterns\Strategy;

class FixedAmountDiscount implements DiscountStrategyInterface
{
    public function __construct(private readonly float $fixedAmount)
    {
    }

    public function calculateDiscount(float $amount): float
    {
        return $this->fixedAmount;
    }
}