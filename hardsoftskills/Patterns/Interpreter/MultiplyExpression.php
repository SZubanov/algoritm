<?php

namespace Patterns\Interpreter;

class MultiplyExpression extends AbstractExpression
{
    public function __construct(private readonly Matrix $operand)
    {
    }

    public function interpret(Matrix $context): Matrix
    {
        return $context->multiply($this->operand);
    }
}