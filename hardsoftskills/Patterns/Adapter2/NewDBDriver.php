<?php

namespace Patterns\Adapter2;

class NewDBDriver implements NewDBInterface
{
    public function newFetchData(): array
    {
        return ['data1', 'data2', 'data3'];
    }
}