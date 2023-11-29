<?php

namespace Patterns\AbstractFactory;

interface TableInterface
{
    public function createTable(): string;
}