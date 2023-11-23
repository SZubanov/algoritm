<?php

namespace AbstractFactory;

interface FurnitureFactoryInterface
{
    public function createChair(): ChairInterface;
    public function createTable(): TableInterface;
    public function createWardrobe(): WardrobeInterface;
}