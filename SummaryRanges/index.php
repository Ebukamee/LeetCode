<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return String[]
 */
function summaryRanges($nums) {
  $result = [];

  if (count($nums) == 0) {
    return $result;
  }
  $start = $nums[0];

  for ($i = 0; $i < count($nums); $i++) {
    if ($i == count($nums) - 1 || $nums[i + 1] != $nums[i] + 1) {
      if ($start == $nums[i]) {
        $result[] = (string)$start;
      } else {
        $result[] = $start .'->' . $nums[i];
        if ($i < count($nums) - 1) {
          $start = $nums[i + 1];
        }
      }
    }
  }
  return $result;
}
}