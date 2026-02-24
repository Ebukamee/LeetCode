<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference(string $s, string $t): string {
    $xor = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $xor ^= ord($s[$i]);
    }

    for ($i = 0; $i < strlen($t); $i++) {
        $xor ^= ord($t[$i]);
    }

    return chr($xor);
}
}