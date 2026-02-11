<?php 
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
    if ($needle === "") return 0;

    $pos = strpos($haystack, $needle);
    return $pos === false ? -1 : $pos;
}

}
?>