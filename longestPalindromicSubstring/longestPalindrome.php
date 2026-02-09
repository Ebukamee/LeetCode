
class Solution {

    /**
     * @param String $s
     * @return String
     */
    
   function longestPalindrome(string $s): string {
    $n = strlen($s);
    if ($n < 2) return $s;

    $start = 0;
    $maxLen = 0;

    $expand = function (&$s, $left, $right, &$start, &$maxLen) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
            $left--;
            $right++;
        }
    
        if ($right - $left - 1 > $maxLen) {
            $start = $left + 1;
            $maxLen = $right - $left - 1;
        }
    };
    for ($i = 0; $i < $n; $i++) {
        $expand($s, $i, $i, $start, $maxLen);     
        $expand($s, $i, $i+1, $start, $maxLen);  
    }

    return substr($s, $start, $maxLen);
}

}