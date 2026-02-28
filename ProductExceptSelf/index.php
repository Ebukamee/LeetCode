<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
    $n = count($nums);
    $result = array_fill(0, $n, 1);
    $result[0] = 1;

    for ($i = 1; $i < $n; $i++) {
        $result[$i] = $result[$i - 1] * $nums[$i - 1];
    }
    
    $rightProduct = 1;
    for ($i = $n - 1; $i >= 0; $i--) {
        $result[$i] *= $rightProduct;
        $rightProduct *= $nums[$i];
    }
    return $result;
}
}