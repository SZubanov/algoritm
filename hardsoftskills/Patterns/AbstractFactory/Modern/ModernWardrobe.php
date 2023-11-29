<?php

namespace Patterns\AbstractFactory;

class ModernWardrobe implements WardrobeInterface
{
    public function createWardrobe(): string
    {
        return 'Modern Wardrobe'.PHP_EOL;
    }
}