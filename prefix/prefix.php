<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
   function longestCommonPrefix($strs) {
    if (count($strs) === 0) return "";

    $prefix = $strs[0];

    foreach ($strs as $word) {
        while (strpos($word, $prefix) !== 0) {
            $prefix = substr($prefix, 0, -1);
            if ($prefix === "") return "";
        }
    }
    return $prefix;
}

}