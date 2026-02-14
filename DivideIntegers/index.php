<?php
class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
  function divide($dividend, $divisor) {
    $INT_MIN = -2147483648;
    $INT_MAX = 2147483647;

    if ($dividend === $INT_MIN && $divisor === -1) {
        return $INT_MAX;
    }

    $negative = ($dividend < 0) !== ($divisor < 0);

    $a = abs($dividend);
    $b = abs($divisor);
    $result = 0;

    while ($a >= $b) {
        $temp = $b;
        $multiple = 1;

        // avoid bit shifting
        while ($a >= $temp + $temp) {
            $temp += $temp;
            $multiple += $multiple;
        }

        $a -= $temp;
        $result += $multiple;
    }

    return $negative ? -$result : $result;
}


}