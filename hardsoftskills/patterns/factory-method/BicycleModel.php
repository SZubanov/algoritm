<?php

namespace FactoryMethod;

class BicycleModel implements TransportInterface
{
    public function move(): void
    {
        echo "Bicycle".PHP_EOL;
    }
}