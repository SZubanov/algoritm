<?php

namespace Patterns\Interpreter;

use Patterns\Interpreter\AbstractExpression;

class TransposeExpression extends AbstractExpression
{
    public function interpret(Matrix $context): Matrix
    {
        return $context->transpose();
    }
}