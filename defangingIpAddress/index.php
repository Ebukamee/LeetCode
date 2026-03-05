<?php

class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
    $result = "";

    for ($i = 0; $i < strlen($address); $i++) {
        if ($address[$i] == ".") {
            $result .= "[.]";
        } else {
            $result .= $address[$i];
        }
    }

    return $result;
}
}