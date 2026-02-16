<?php
class Solution {
    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        if ($num1 === "0" || $num2 === "0") return "0";

        $m = strlen($num1);
        $n = strlen($num2);
        $result = array_fill(0, $m + $n, 0);

        for ($i = $m - 1; $i >= 0; $i--) {
            for ($j = $n - 1; $j >= 0; $j--) {
                $mul = ($num1[$i] - '0') * ($num2[$j] - '0');
                $sum = $mul + $result[$i + $j + 1];

                $result[$i + $j + 1] = $sum % 10;
                $result[$i + $j] += intdiv($sum, 10);
            }
        }

        $resStr = "";
        foreach ($result as $digit) {
            if (!($resStr === "" && $digit === 0)) {
                $resStr .= $digit;
            }
        }

        return $resStr;
    }
}
