<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
   function checkRecord($s) {
        $absentCount = 0;
        $lateStreak = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === 'A') {
                $absentCount++;
                $lateStreak = 0;
            } elseif ($s[$i] === 'L') {
                $lateStreak++;
                if ($lateStreak === 3) return false;
            } else {
                $lateStreak = 0;
            }

            if ($absentCount === 2) return false;
        }

        return true;
    }
}