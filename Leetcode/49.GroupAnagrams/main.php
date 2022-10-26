<?php

// https://leetcode.com/problems/group-anagrams/

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $res = [];

        if (count($strs) === 1) {
            $res[] = [array_values($strs)];
            return array_values($res);
        }

        $hash = array_fill(0, 26, 0);
        foreach ($strs as $str) {
            $res[$this->getKey($str, $hash)][] = $str;
        }

        return array_values($res);
    }

    /**
     * @param string $str
     * @param int[] $hash
     * @return string
     */
    function getKey($str, $hash)
    {
        for ($i=0, $iMax = strlen($str); $i<$iMax; $i++) {
            ++$hash[(ord($str[$i]) - ord('a'))];
        }

       return implode(":", array_values($hash));
    }
}

$solution = new Solution();
$solution->groupAnagrams(["eat","tea","tan","ate","nat","bat"]);
$solution->groupAnagrams([""]);
$solution->groupAnagrams(["a"]);
$solution->groupAnagrams(["bdddddddddd","bbbbbbbbbbc"]);