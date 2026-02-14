<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
    $result = [];

    $backtrack = function($current, $open, $close) use ($n, &$result, &$backtrack) {

        // If the string is complete
        if (strlen($current) === 2 * $n) {
            $result[] = $current;
            return;
        }

        // Add '(' if we still can
        if ($open < $n) {
            $backtrack($current . "(", $open + 1, $close);
        }

        // Add ')' only if valid
        if ($close < $open) {
            $backtrack($current . ")", $open, $close + 1);
        }
    };

    $backtrack("", 0, 0);
    return $result;
}

}