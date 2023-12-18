<?php

namespace Patterns\Interpreter;

class Matrix
{
    public function __construct(private readonly array $data)
    {
    }

    public function add(Matrix $matrix): Matrix
    {
        $resultData = [];
        $rows = count($this->data);
        $cols = count($this->data[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $resultData[$i][$j] = $this->data[$i][$j] + $matrix->data[$i][$j];
            }
        }

        return new Matrix($resultData);
    }

    public function multiply(Matrix $matrix): Matrix
    {
        $resultData = [];
        $rowsA = count($this->data);
        $colsA = count($this->data[0]);
        $colsB = count($matrix->data[0]);

        for ($i = 0; $i < $rowsA; $i++) {
            for ($j = 0; $j < $colsB; $j++) {
                $resultData[$i][$j] = 0;
                for ($k = 0; $k < $colsA; $k++) {
                    $resultData[$i][$j] += $this->data[$i][$k] * $matrix->data[$k][$j];
                }
            }
        }

        return new Matrix($resultData);
    }

    public function transpose(): Matrix
    {
        $resultData = [];
        $rows = count($this->data);
        $cols = count($this->data[0]);

        for ($i = 0; $i < $cols; $i++) {
            for ($j = 0; $j < $rows; $j++) {
                $resultData[$i][$j] = $this->data[$j][$i];
            }
        }

        return new Matrix($resultData);
    }

    public function draw(): void
    {
        foreach ($this->data as $row) {
            echo implode("\t", $row) . PHP_EOL;
        }
    }
}
