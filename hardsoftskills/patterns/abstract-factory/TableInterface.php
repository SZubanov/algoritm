<?php

namespace AbstractFactory;

interface TableInterface
{
    public function createTable(): string;
}