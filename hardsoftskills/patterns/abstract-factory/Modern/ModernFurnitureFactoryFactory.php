<?php

namespace AbstractFactory;

class ModernFurnitureFactoryFactory implements FurnitureFactoryInterface
{
    public function createChair(): ChairInterface
    {
       return new ModernChair();
    }

    public function createTable(): TableInterface
    {
       return new ModernTable();
    }

    public function createWardrobe(): WardrobeInterface
    {
        return new ModernWardrobe();
    }
}