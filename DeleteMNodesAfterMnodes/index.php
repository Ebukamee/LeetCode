<?php
function deleteNodes($head, $m, $n) {
    $curr = $head;
    while ($curr !== null) {
        for ($i = 1; $i < $m && $curr !== null; $i++) {
            $curr = $curr->next;
        }
        if ($curr === null) break;
        
        $temp = $curr->next;
        for ($i = 0; $i < $n && $temp !== null; $i++) {
            $temp = $temp->next;
        }
        
        $curr->next = $temp;
        $curr = $temp;
    }
    return $head;
}