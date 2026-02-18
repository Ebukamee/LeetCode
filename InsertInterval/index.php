<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
   function insert($intervals, $newInterval) {
    $result = [];

    foreach ($intervals as $interval) {


        if ($interval[1] < $newInterval[0]) {
            $result[] = $interval;


        } elseif ($interval[0] > $newInterval[1]) {
            $result[] = $newInterval;
            $newInterval = $interval;


        } else {
            $newInterval[0] = min($newInterval[0], $interval[0]);
            $newInterval[1] = max($newInterval[1], $interval[1]);
        }
    }

    $result[] = $newInterval;

    return $result;
}

}