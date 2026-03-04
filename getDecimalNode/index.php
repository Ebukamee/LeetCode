<?php
function getDecimalValue($head) {
	$result = 0;
	$current = head;
	while ($current !== null) {
		$result = ($result * 2) + $current->val
		$current = $current->next
	}
	return $result
}