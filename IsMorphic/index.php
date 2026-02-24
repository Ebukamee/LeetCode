<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
   function isIsomorphic($s,$t) {
    if (strlen($s) !== strlen($t)) {
        return false;
    }

    $sToT = [];
    $tToS = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $charS = $s[$i];
        $charT = $t[$i];

        if (isset($sToT[$charS])) {
            if ($sToT[$charS] !== $charT) {
                return false;
            }
        } else {
            if (isset($tToS[$charT]) && $tToS[$charT] !== $charS) {
                return false;
            }
            $sToT[$charS] = $charT;
            $tToS[$charT] = $charS;
        }
    }

    return true;
}
}