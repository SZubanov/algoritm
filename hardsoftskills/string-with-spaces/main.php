<?php

// O(n)
class Solution
{
    public function solve($string)
    {
        $map = [];
        $maxValue = null;

        for ($i = 0, $iMax = strlen($string); $i < $iMax; $i++) {
            if ($string[$i] === ' ') {
                continue;
            }

            if (!isset($map[$string[$i]])) {
                $map[$string[$i]] = 1;
            } else {
                $map[$string[$i]]++;
            }

            if ($map[$string[$i]] > $maxValue) {
                $maxValue = $string[$i];
            }
        }

        return $maxValue;
    }
}

$string = '1 1 2  2   2 3 4   2 3 3 33 3 ';

print_r((new Solution())->solve($string));