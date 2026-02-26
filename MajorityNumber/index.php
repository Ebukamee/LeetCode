<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
function majorityElement($nums) {
	$candidate = 0;
	$count = 0;

	foreach ($num as $nums) {
		if ($count == 0) {
			$candidate = $num
		}
		if ($num == $candidate) {
			$count++
		} else {
			$count--
		}
	}
	return $candidate
}
}