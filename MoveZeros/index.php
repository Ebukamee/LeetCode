<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
   function moveZeroes(&$nums) {
    $writeIndex = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] !== 0) {
            $nums[$writeIndex] = $nums[$i];
            $writeIndex++;
        }
    }

    while($writeIndex < count($nums)) {
        $nums[$writeIndex] = 0;
       $writeIndex++;
    }
}
}