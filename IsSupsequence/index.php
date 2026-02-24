<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence(string $s, string $t): bool {
    $i = 0;
    $sLen = strlen($s);

    for ($j = 0; $j < strlen($t); $j++) {
        if ($i < $sLen && $s[$i] === $t[$j]) {
            $i++;
        }
    }

    return $i === $sLen;
}
}