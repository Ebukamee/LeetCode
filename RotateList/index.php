<?php
function rotateRight($head, $k) {

    if (!$head || !$head->next) return $head;

    $length = 1;
    $tail = $head;

    while ($tail->next) {
        $tail = $tail->next;
        $length++;
    }

    $k = $k % $length;

    if ($k == 0) return $head;

    $tail->next = $head;

    for ($i = 0; $i < $length - $k; $i++) {
        $tail = $tail->next;
    }

    $newHead = $tail->next;

    $tail->next = null;

    return $newHead;
}