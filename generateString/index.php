<?php
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString($n) {
    if ($n % 2 == 1) {
        return str_repeat("a", $n);
    }

    return str_repeat("a", $n - 1) . "b";
}
}