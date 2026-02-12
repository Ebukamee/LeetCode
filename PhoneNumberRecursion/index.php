<?php
class Solution
{

    /**
     * @param String $digits
     * @return String[]
     */
function letterCombinations($digits) {
    if (strlen($digits) === 0) return [];

    $map = [
        '2' => 'abc',
        '3' => 'def',
        '4' => 'ghi',
        '5' => 'jkl',
        '6' => 'mno',
        '7' => 'pqrs',
        '8' => 'tuv',
        '9' => 'wxyz'
    ];

    $result = [];

    function RecursiveBuild($index, $current, $digits, $map, &$result) {
        if ($index === strlen($digits)) {
            $result[] = $current;
            return;
        }

        $letters = $map[$digits[$index]];
        for ($i = 0; $i < strlen($letters); $i++) {
            RecursiveBuild($index + 1, $current . $letters[$i], $digits, $map, $result);
        }
    }

    RecursiveBuild(0, "", $digits, $map, $result);
    return $result;
}
}