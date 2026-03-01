<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
        function topKFrequent($nums, $k) {
        $freq = [];

        foreach ($nums as $num) {
            $freq[$num] = ($freq[$num] ?? 0) + 1;
        }

        $buckets = array_fill(0, count($nums) + 1, []);

        foreach ($freq as $num => $f) {
            $buckets[$f][] = $num;
        }

        $result = [];

        for ($i = count($buckets) - 1; $i >= 0 && count($result) < $k; $i--) {
            foreach ($buckets[$i] as $num) {
                $result[] = $num;
                if (count($result) === $k) break;
            }
        }

        return $result;
    }

}