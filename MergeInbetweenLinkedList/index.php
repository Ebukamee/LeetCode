<?php
function mergeInBetween($list1, $a, $b, $list2) {
    $start = $list1;
    for ($i = 1; $i < $a; $i++) {
        $start = $start->next;
    }
    
    $end = $start;
    for ($i = $a; $i <= $b + 1; $i++) {
        $end = $end->next;
    }
    
    $start->next = $list2;
    
    $curr2 = $list2;
    while ($curr2->next !== null) {
        $curr2 = $curr2->next;
    }
    
    $curr2->next = $end;
    return $list1;
}