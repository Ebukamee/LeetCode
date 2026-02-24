<?php
class Solution {

    /**
     * @param Integer[] $customers
     * @param Integer[] $grumpy
     * @param Integer $minutes
     * @return Integer
     */
    function maxSatisfied($customers, $grumpy, $minutes) {
        $baseSatisfied = 0;
        $extraSatisfied = 0;
        $maxExtraSatisfied = 0;

    for ($i = 0; $i < count($customers); $i++) {
        if ($grumpy[$i] === 0) {
            $baseSatisfied += $customers[$i];
        }
    }

    for ($i = 0; $i < $minutes; $i++) {
        if ($grumpy[$i] === 1) {
            $extraSatisfied += $customers[$i];
        }
    }

    $maxExtraSatisfied = $extraSatisfied;

    for ($i = $minutes; $i < count($customers); $i++) {
        if ($grumpy[$i] === 1) {
            $extraSatisfied += $customers[$i];
        }
        if ($grumpy[$i - $minutes] === 1) {
            $extraSatisfied -= $customers[$i - $minutes];
        }
        $maxExtraSatisfied = max($maxExtraSatisfied, $extraSatisfied);
    }

    return $baseSatisfied + $maxExtraSatisfied;
}
}