<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
    $lastSeen = [];

    foreach ($nums as $i => $num) {
        if (isset($lastSeen[$num])) {
            if ($i - $lastSeen[$num] <= $k) {
                return true;
            }
        }
        $lastSeen[$num] = $i;
    }

    return false;
}
}