<?php

use Patterns\Strategy\DiscountCalculator;
use Patterns\Strategy\FixedAmountDiscount;
use Patterns\Strategy\FreeItemDiscount;
use Patterns\Strategy\PercentageDiscount;

require_once 'DiscountStrategyInterface.php';
require_once 'FixedAmountDiscount.php';
require_once 'FreeItemDiscount.php';
require_once 'PercentageDiscount.php';
require_once 'DiscountCalculator.php';

$fixedAmountDiscount = new FixedAmountDiscount(50.0);
$percentageDiscount = new PercentageDiscount(12.0);
$freeItemDiscount = new FreeItemDiscount(0);

$calculator1 = new DiscountCalculator($fixedAmountDiscount);
$calculator2 = new DiscountCalculator($percentageDiscount);
$calculator3 = new DiscountCalculator($freeItemDiscount);

// Расчет скидок
$amount = 99.0;

echo "Скидка для фиксированной суммы: " . $calculator1->calculateDiscount($amount) . "\n";
echo "Скидка для процента: " . $calculator2->calculateDiscount($amount) . "\n";
echo "Скидка для бесплатного товара: " . $calculator3->calculateDiscount($amount) . "\n";