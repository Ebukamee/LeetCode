<?php
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
    if (count($intervals) === 0) {
        return $intervals;
    }

    // Sort intervals by start time
    usort($intervals, function ($a, $b) {
        return $a[0] <=> $b[0];
    });

    $result = [];
    $current = $intervals[0];

    for ($i = 1; $i < count($intervals); $i++) {
        $next = $intervals[$i];

        if ($next[0] <= $current[1]) {
            $current[1] = max($current[1], $next[1]);
        } else {
            $result[] = $current;
            $current = $next;
        }
    }

    
    $result[] = $current;

    return $result;
}

}