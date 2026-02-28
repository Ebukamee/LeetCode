<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(" ", $s);

        foreach ($words as &$word) {
            $word = strrev($word);
        }

        return implode(" ", $words);
    }
}