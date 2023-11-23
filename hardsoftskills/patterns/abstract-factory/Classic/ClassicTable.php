<?php

namespace AbstractFactory;

class ClassicTable implements TableInterface
{
    public function createTable(): string
    {
       return 'Classic Table'.PHP_EOL;
    }
}