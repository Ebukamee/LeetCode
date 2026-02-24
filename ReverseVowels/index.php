<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels(string $s): string {
    $vowels = array_flip(['a','e','i','o','u','A','E','I','O','U']);
    $arr = str_split($s);

    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        while ($left < $right && !isset($vowels[$arr[$left]])) $left++;
        while ($left < $right && !isset($vowels[$arr[$right]])) $right--;

        [$arr[$left], $arr[$right]] = [$arr[$right], $arr[$left]];
        $left++;
        $right--;
    }

    return implode('', $arr);
}
}