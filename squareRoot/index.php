<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
  function mySqrt($x) {
    $left = 0;
    $right = $x;
    $answer = 0;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);

        if ($mid * $mid == $x) {
            return $mid;
        }

        if ($mid * $mid < $x) {
            $answer = $mid;
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $answer;
}

}