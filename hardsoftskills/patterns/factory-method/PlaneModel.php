<?php

namespace FactoryMethod;

class PlaneModel implements TransportInterface
{
    public function move(): void
    {
        echo "Plane".PHP_EOL;
    }
}