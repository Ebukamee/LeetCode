<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
   function toLowerCase($s) {
        $result = "";

        for ($i = 0; $i < strlen($s); $i++) {
            $code = ord($s[$i]);

            if ($code >= 65 && $code <= 90) {
                $result .= chr($code + 32);
            } else {
                $result .= $s[$i];
            }
        }

        return $result;
    }
}