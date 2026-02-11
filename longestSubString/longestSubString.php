<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
    $set = [];
    $left = 0;
    $maxLen = 0;

    for ($right = 0; $right < strlen($s); $right++) {
        while (isset($set[$s[$right]])) {
            unset($set[$s[$left]]);
            $left++;
        }
        $set[$s[$right]] = true;
        $maxLen = max($maxLen, $right - $left + 1);
    }
    return $maxLen;
}

}