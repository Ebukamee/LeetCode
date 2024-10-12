
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x === $reversed = (int) strrev((string) $x);
  
    }
}