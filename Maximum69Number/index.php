<?php
function maximum69Number($num) {

    $str = strval($num);
    $changed = false;
    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {

        if ($str[$i] == "6" && !$changed) {
            $result .= "9";
            $changed = true;
        } else {
            $result .= $str[$i];
        }
    }

    return intval($result);
}