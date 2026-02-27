<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return int
 */
function missingNumber($nums) {
	$n = count($nums);
    $expectedSum = ($n * ($n + 1)) / 2;
	$actualSum = 0;

	foreach ($nums as $num) {
		$actualSum += $num;
	}
	return $expectedSum - $actualSum;
}
}