<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $set = array_flip($nums);
        $longest = 0;

        foreach ($set as $num => $_) {
            if (!isset($set[$num - 1])) {
                $current = $num;
                $count = 1;

                while (isset($set[$current + 1])) {
                    $current++;
                    $count++;
                }

                $longest = max($longest, $count);
            }
        }

        return $longest;
    }
}