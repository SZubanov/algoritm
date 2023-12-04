<?php

namespace Patterns\Bridge;

use Patterns\Bridge\DeviceInterface;

class SmartWatch implements DeviceInterface
{

    public function getType(): string
    {
        return 'SmartWatch';
    }
}