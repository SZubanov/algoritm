<?php

namespace Patterns\Bridge;

use Patterns\Bridge\FunctionInterface;

class Text implements FunctionInterface
{
    public function performFunction(): string
    {
        return 'Sending a text';
    }
}