<?php

//https://leetcode.com/problems/top-k-frequent-elements/

// O(n)
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $countMap = [];
        $countSlice = array_fill(0, count($nums) + 1, []);
        $res = [];

        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            if (array_key_exists($nums[$i], $countMap)) {
                ++$countMap[$nums[$i]];
            } else {
                $countMap[$nums[$i]] = 1;
            }
        }

        foreach ($countMap as $value => $count) {
            $countSlice[$count][] = $value;
        }

//        for ($i = count($countSlice) - 1; $i > 0; $i--) {
//            if (empty($countSlice[$i])) {
//                continue;
//            }
//
//            if (count($countSlice[$i]) === 1) {
//                $res[] = array_push($res, ...$countSlice[$i]);
//            }
//
//            if (count($countSlice[$i]) > 1) {
//                if ($count($res) != 0) {
//
//                }
//            }
//
//            if (count($res) === $k) {
//                break;
//            }
//        }

        for($j = count($countSlice) - 1; $j >= 0; $j--){
            if(count($countSlice[$j]) !== 0){
                $index = 0;

                while($index < count($countSlice[$j]) && $k > 0 ){
                    array_push($res, $countSlice[$j][$index]);
                    $index++;
                    $k--;
                }
            }
        }

        return $res;
    }
}

$res = (new Solution())->topKFrequent([1,1,2,2,2,3,3], 2);
print_r($res);