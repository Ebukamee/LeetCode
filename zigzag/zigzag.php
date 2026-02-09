class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows == 1) return $s;
        $rows = array_fill(0, min($numRows, strlen($s)), '');
        $curRow = 0;
        $goingDown = true;

        for ($i = 0; $i < strlen($s); $i++) {
            $rows[$curRow] .= $s[$i];
            if ($curRow == 0) {
                $goingDown = true;
            }
            if ($curRow == $numRows - 1) {
                $goingDown = false;
            }
            $curRow += $goingDown ? 1 : -1;
        }
        return implode('', $rows);
    }
}
