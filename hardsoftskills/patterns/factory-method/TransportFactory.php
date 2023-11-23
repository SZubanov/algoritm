<?php

namespace FactoryMethod;

class TransportFactory
{
    public function __construct(
        private readonly BicycleFactory $bicycleFactory,
        private readonly CarFactory $carFactory,
        private readonly PlaneFactory $planeFactory
    ) {
    }

    public function createBicycle(): TransportInterface
    {
        return $this->bicycleFactory->createTransport();
    }

    public function createCar(): TransportInterface
    {
        return $this->carFactory->createTransport();
    }

    public function createPlane(): TransportInterface
    {
        return $this->planeFactory->createTransport();
    }
}


//$transportFactory = new TransportFactory(
//    new BicycleFactory(),
//    new CarFactory(),
//    new PlaneFactory()
//);
//
//$transportFactory->createBicycle();
//$transportFactory->createCar();
//$transportFactory->createPlane();
