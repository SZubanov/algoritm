<?php

namespace FactoryMethod;

class BicycleFactory
{
    public function createTransport(): TransportInterface {
        return new BicycleModel();
    }
}