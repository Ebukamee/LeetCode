<?php
function getIntersectionNode($headA, $headB) {
$a = $headA;
$b = $headB;

	while ($a !== $b) {
	$a = ($a === null) ? $headB : $a->next;
    $b = ($b === null) ? $headB : $b->next;
    }
	return a;
}