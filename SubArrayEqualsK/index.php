<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
    $count = 0;
    $prefixSum = 0;
    $prefixSumMap = array(0 => 1);

    foreach ($nums as $num) {
        $prefixSum += $num;

        if (isset($prefixSumMap[$prefixSum - $k])) {
            $count += $prefixSumMap[$prefixSum - $k];
        }
        $prefixSumMap[$prefixSum] = (isset($prefixSumMap[$prefixSum]) ? $prefixSumMap[$prefixSum] : 0) + 1;
    }
    return $count;
}
}