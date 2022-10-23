<?php

// https://leetcode.com/problems/valid-anagram/

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $sHash = [];
        $tHash = [];

        for ($i=0, $iMax = strlen($s); $i<$iMax; $i++) {
            $sHash[$s[$i]] = isset($sHash[$s[$i]]) ? $sHash[$s[$i]]+1 : 1;
            $tHash[$t[$i]] = isset($tHash[$t[$i]]) ? $tHash[$t[$i]]+1 : 1;
        }

        foreach ($sHash as $letter => $count) {
            if ($count !== $tHash[$letter] || !isset($tHash[$letter])) {
                return false;
            }
        }

        return true;
    }

}

$soulution = new Solution();
$soulution->isAnagram('anagram', 'aaangrm');
