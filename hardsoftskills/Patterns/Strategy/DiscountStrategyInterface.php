<?php

namespace Patterns\Strategy;

interface DiscountStrategyInterface
{
    public function calculateDiscount(float $amount): float;
}