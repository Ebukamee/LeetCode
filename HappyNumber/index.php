<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy(int $n): bool {
    $seen = [];

    while ($n !== 1) {
        if (isset($seen[$n])) {
            return false;
        }

        $seen[$n] = true;
        $n = sumOfSquares($n);
    }

    return true;
}

function sumOfSquares(int $num): int {
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit * $digit;
        $num = intdiv($num, 10);
    }

    return $sum;
}
}