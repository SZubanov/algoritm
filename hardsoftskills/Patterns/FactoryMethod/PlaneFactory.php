<?php

namespace Patterns\FactoryMethod;

class PlaneFactory
{
    public function createTransport(): TransportInterface {
        return new PlaneModel();
    }
}