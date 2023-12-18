<?php

namespace Patterns\Interpreter;

class AddExpression extends AbstractExpression
{
    public function __construct(private readonly Matrix $operand)
    {
    }

    public function interpret(Matrix $context): Matrix
    {
        return $context->add($this->operand);
    }
}