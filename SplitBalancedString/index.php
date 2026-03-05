<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $count = 0;
        $balance = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == 'L') {
                $balance++;
            } else {
                $balance--;
            }
            if ($balance == 0) {
                $count++;
            }
        }
        return $count;
    }
}
		