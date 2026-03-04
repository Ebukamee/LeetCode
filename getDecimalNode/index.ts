function getDecimalValue(head :ListNode | null): number {
	let result = 0
	let current = head
	while (current !== null) {
		result = (result * 2) + current.val
		current = current.next
	}
	return result
}