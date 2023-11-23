<?php

namespace AbstractFactory;

class ModernChair implements ChairInterface
{
    public function createChair(): string
    {
        return 'Modern Chair'.PHP_EOL;
    }
}