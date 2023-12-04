<?php

namespace Patterns\Bridge;

use Patterns\Bridge\DeviceInterface;

class Tablet implements DeviceInterface
{

    public function getType(): string
    {
        return 'Tablet';
    }
}