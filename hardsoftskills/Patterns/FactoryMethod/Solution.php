<?php

namespace Patterns\FactoryMethod;

require_once 'TransportInterface.php';
require_once 'BicycleModel.php';
require_once 'BicycleFactory.php';
require_once 'CarModel.php';
require_once 'CarFactory.php';
require_once 'PlaneModel.php';
require_once 'PlaneFactory.php';
require_once 'TransportFactory.php';

class Solution
{
    public function __construct(private readonly TransportFactory $factory)
    {
    }

    public function solve(): void
    {
        $this->factory->createBicycle()->move();
        $this->factory->createCar()->move();
        $this->factory->createPlane()->move();
    }
}

(new Solution(
    new TransportFactory(
        new BicycleFactory(),
        new CarFactory(),
        new PlaneFactory()
    )
))->solve();