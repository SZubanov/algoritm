<?php

namespace Patterns\AbstractFactory;

class ClassicFurnitureFactoryFactory implements FurnitureFactoryInterface
{
    public function createChair(): ChairInterface
    {
       return new ClassicChair();
    }

    public function createTable(): TableInterface
    {
        return new ClassicTable();
    }

    public function createWardrobe(): WardrobeInterface
    {
        return new ClassicWardrobe();
    }
}