<?php
declare(strict_types=1);

class Solution
{
    private array $array;
    private int $min = 0;
    private int $max = 0;
    private float $avg = 0;

    public function solve(int $countElements): void
    {
        $this->createArray($countElements);
        $this->findValues();
        $this->response();
    }

    private function createArray(int $countElements): void
    {
        for ($i = 0; $i < $countElements; $i++) {
            $this->array[] = random_int(-100, 100);
        }
    }

    private function findValues(): void
    {
        $avg = array_sum($this->array) / count($this->array);
        $minDifference = abs($this->array[0] - $avg);

        for ($i=0, $iMax = count($this->array); $i < $iMax; $i++) {
            $difference = abs($this->array[$i] - $avg);
            if ($difference < $minDifference) {
                $closest = $this->array[$i];
                $minDifference = $difference;
                $this->avg = $closest;
            }


            if ($this->array[$i] < $this->min) {
                $this->min = $this->array[$i];
            }

            if ($this->array[$i] > $this->max) {
                $this->max = $this->array[$i];
            }
        }
    }

    private function response(): void
    {
        print_r($this->array);
        print_r([
            'min' => $this->min,
            'max' => $this->max,
            'avg' => $this->avg,
        ]);
    }
}


(new Solution())->solve(100);