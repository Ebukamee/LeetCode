<?php
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
    $dummy = new ListNode(0,$head);
    $prev  = $dummy;

    while ($prev->next && $prev->next->next) {
        $first = $prev->next;
        $second= $first->next;

        $first->next = $second->next;
        $second->next = $first;
        $prev->next = $second;

        $prev = $first;
    }
    return $dummy->next;
}
}