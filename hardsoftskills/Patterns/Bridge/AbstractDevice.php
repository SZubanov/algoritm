<?php

namespace Patterns\Bridge;

abstract class AbstractDevice
{
    public function __construct(
        protected DeviceInterface $device,
        protected FunctionInterface $function
    ) {
    }

    abstract public function operate(): string;
}