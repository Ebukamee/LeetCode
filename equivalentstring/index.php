<?php

function arrayStringsAreEqual($word1, $word2) {

    $str1 = implode("", $word1);
    $str2 = implode("", $word2);

    return $str1 === $str2;
}