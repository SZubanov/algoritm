<?php

namespace FactoryMethod;

class CarFactory
{
    public function createTransport(): TransportInterface {
        return new CarModel();
    }
}