<?php

class Solution {
    function rotate(&$nums, $k) {
        $n = count($nums);
        $k = $k % $n;

        $this->reverse($nums, 0, $n - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $n - 1);
    }

    function reverse(&$nums, $left, $right) {
        while ($left < $right) {
            [$nums[$left], $nums[$right]] = [$nums[$right], $nums[$left]];
            $left++;
            $right--;
        }
    }
}