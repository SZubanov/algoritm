<?php

namespace Patterns\AbstractFactory;

class ClassicChair implements ChairInterface
{
    public function createChair(): string
    {
        return 'Classic Chair'.PHP_EOL;
    }
}