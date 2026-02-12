<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) -1;
        $maxArea = 0;

        while($left < $right) {
            $width = $right - $left;
            $minHeight = min($height[$right], $height[$left]);
            $currentArea = $width * $minHeight;
            if($currentArea > $maxArea) {
                $maxArea = $currentArea;
            }
            if($height[$left] < $height[$right]) {
                $left++;
            }
            else {
                $right--;
            }
        }
        return $maxArea;
    }
}