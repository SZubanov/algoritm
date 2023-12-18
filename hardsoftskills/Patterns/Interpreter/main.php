<?php

require_once 'Matrix.php';
require_once 'AbstractExpression.php';
require_once 'AddExpression.php';
require_once 'MultiplyExpression.php';
require_once 'TransposeExpression.php';
require_once 'MatrixContext.php';

use Patterns\Interpreter\AddExpression;
use Patterns\Interpreter\Matrix;
use Patterns\Interpreter\MatrixContext;
use Patterns\Interpreter\MultiplyExpression;
use Patterns\Interpreter\TransposeExpression;

$matrixA = new Matrix([[1, 2], [3, 4]]);
$matrixB = new Matrix([[5, 6], [7, 8]]);

$addExpression = new AddExpression($matrixB);
$multiplyExpression = new MultiplyExpression($matrixB);
$transposeExpression = new TransposeExpression();

$context = new MatrixContext($matrixA);

$resultAdd = $context->interpret($addExpression);
$resultMultiply = $context->interpret($multiplyExpression);
$resultTranspose = $context->interpret($transposeExpression);

echo "Matrix A:" . PHP_EOL;
$matrixA->draw();

echo "Matrix B:" . PHP_EOL;
$matrixB->draw();

echo "Result of Addition:" . PHP_EOL;
$resultAdd->draw();

echo "Result of Multiplication:" . PHP_EOL;
$resultMultiply->draw();

echo "Result of Transposition:" . PHP_EOL;
$resultTranspose->draw();