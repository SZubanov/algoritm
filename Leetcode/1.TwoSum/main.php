<?php

// https://leetcode.com/problems/two-sum/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hash = [];

        foreach ($nums as $index => $num) {
            if (isset($hash[$target - $num])) {
                return [$hash[$target - $num], $index];
            }
            $hash[$num] = $index;
        }

        return [];
    }
}

$solution = new Solution();
$solution->twoSum([3,2,4],6);