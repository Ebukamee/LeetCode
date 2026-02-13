<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs(int $n): int {
    if ($n <= 2) return $n;

    $first = 1;
    $second = 2;

    for ($i = 3; $i <= $n; $i++) {
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }

    return $second;
}

}