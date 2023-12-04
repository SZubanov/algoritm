<?php

namespace Patterns\Bridge;

use Patterns\Bridge\DeviceInterface;

class Phone implements DeviceInterface
{

    public function getType(): string
    {
        return 'Phone';
    }
}