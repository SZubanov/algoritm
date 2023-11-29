<?php

namespace Patterns\Adapter2;

class Adapter implements OldDbInterface
{
    public function __construct(private readonly NewDBInterface $newDB)
    {
        
    }
    
    public function oldFetchData(): array
    {
        return $this->newDB->newFetchData();
    }
}