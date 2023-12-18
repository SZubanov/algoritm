<?php

namespace Patterns\Interpreter;

class MatrixContext
{
    public function __construct(private readonly Matrix $matrix)
    {
    }

    public function interpret(AbstractExpression $expression): Matrix
    {
        return $expression->interpret($this->matrix);
    }
}