<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    $store = [];

    foreach ($nums as $i => $num) {
       $number = $num;
       if(array_key_exists($number,$store)) {
        return [$store[$number],$i];
       }
        $store[$target - $num]= $i;
    }
    return[];
}
}
?>