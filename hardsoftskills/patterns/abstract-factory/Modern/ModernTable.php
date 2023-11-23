<?php

namespace AbstractFactory;

class ModernTable implements TableInterface
{
    public function createTable(): string
    {
        return 'Modern Table'.PHP_EOL;
    }
}