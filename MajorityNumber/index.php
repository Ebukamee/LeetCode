<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
function majorityElement($nums) {
	$candidate = 0;
	$count = 0;

	foreach ($nums as $num) {
		if ($count == 0) {
			$candidate = $num;
		}
		if ($num == $candidate) {
			$count++;
		} else {
			$count--;
		}
	}
	return $candidate;
}
}