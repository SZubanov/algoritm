<?php

namespace Patterns\Interpreter;

abstract class AbstractExpression
{
    abstract public function interpret(Matrix $context): Matrix;
}