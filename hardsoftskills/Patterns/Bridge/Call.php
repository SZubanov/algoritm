<?php

namespace Patterns\Bridge;

use Patterns\Bridge\FunctionInterface;

class Call implements FunctionInterface
{
    public function performFunction(): string
    {
        return 'Making a call';
    }
}