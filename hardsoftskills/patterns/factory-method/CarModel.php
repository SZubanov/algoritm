<?php

namespace FactoryMethod;

class CarModel implements TransportInterface
{
    public function move(): void
    {
        echo "Car".PHP_EOL;
    }
}