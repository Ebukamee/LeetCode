<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome(string $s): bool {
    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
        while ($left < $right && !ctype_alnum($s[$left])) {
            $left++;
        }

        while ($left < $right && !ctype_alnum($s[$right])) {
            $right--;
        }

        if (strtolower($s[$left]) !== strtolower($s[$right])) {
            return false;
        }

        $left++;
        $right--;
    }

    return true;
}

}