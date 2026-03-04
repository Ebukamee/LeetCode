<?php
function middleNode($head){
    $slow = head;
    $fast = head;

    for ($fast !== null && $fast->next !== null) {
        $slow = $slow->next
        $fast = $fast->next->next
    }

    return $slow
}