<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
  function addBinary(string $a, string $b): string {
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;
    $carry = 0;
    $result = "";

    while ($i >= 0 || $j >= 0 || $carry > 0) {
        $sum = $carry;

        if ($i >= 0) {
            $sum += intval($a[$i]);
            $i--;
        }

        if ($j >= 0) {
            $sum += intval($b[$j]);
            $j--;
        }

        $result = ($sum % 2) . $result;
        $carry = intdiv($sum, 2);
    }

    return $result;
}

}