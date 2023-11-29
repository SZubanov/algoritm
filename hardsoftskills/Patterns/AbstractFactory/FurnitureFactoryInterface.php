<?php

namespace Patterns\AbstractFactory;

interface FurnitureFactoryInterface
{
    public function createChair(): ChairInterface;
    public function createTable(): TableInterface;
    public function createWardrobe(): WardrobeInterface;
}