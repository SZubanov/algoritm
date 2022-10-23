<?php

// https://leetcode.com/problems/contains-duplicate/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $hash = [];

        foreach ($nums as $num) {
            if(isset($hash[$num])) {
                return true;
            }
            $hash[$num] = true;
        }

        return false;
    }
}

$solution = new Solution();
$solution->containsDuplicate([1,2,3,1]);