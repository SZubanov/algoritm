<?php

namespace Patterns\Bridge;

class DeviceOperation extends AbstractDevice
{
    public function operate(): string
    {
        return $this->device->getType() . ' is ' . $this->function->performFunction();
    }
}