<?php

namespace Patterns\LazyLoad;

class LazyLoad
{
    private ?int $price = null;

    private PriceService $priceService;

    public function __construct($productId, PriceService $priceService)
    {
        $this->productId = $productId;
        $this->priceService = $priceService;
    }

    public function getPrice(): int
    {
        if ($this->price === null) {
            // Если цена еще не была запрошена, запросить у PriceService и кэшировать
            $this->price = $this->priceService->getPrice($this->productId);
        }

        return $this->price;
    }
}

class PriceService {
    public function getPrice($productId): int
    {
        return 100;
    }
}

$lazyLoad = new LazyLoad(1, new PriceService());

print_r($lazyLoad->getPrice().PHP_EOL);
print_r($lazyLoad->getPrice().PHP_EOL);