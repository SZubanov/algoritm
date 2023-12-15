<?php

namespace Patterns\Observer;

interface ObserverInterface
{
    public function update(string $message): void;
}