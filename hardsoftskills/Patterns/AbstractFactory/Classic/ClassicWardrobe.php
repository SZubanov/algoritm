<?php

namespace Patterns\AbstractFactory;

class ClassicWardrobe implements WardrobeInterface
{
    public function createWardrobe(): string
    {
        return 'Classic Wardrobe'.PHP_EOL;
    }
}