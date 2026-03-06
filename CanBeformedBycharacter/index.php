<?php

function countCharacters($words, $chars) {

    $total = 0;
    $base = [];

    for ($i = 0; $i < strlen($chars); $i++) {
        $base[$chars[$i]] = ($base[$chars[$i]] ?? 0) + 1;
    }

    foreach ($words as $word) {

        $temp = [];
        $valid = true;

        for ($i = 0; $i < strlen($word); $i++) {

            $char = $word[$i];
            $temp[$char] = ($temp[$char] ?? 0) + 1;

            if ($temp[$char] > ($base[$char] ?? 0)) {
                $valid = false;
                break;
            }
        }

        if ($valid) $total += strlen($word);
    }

    return $total;
}
