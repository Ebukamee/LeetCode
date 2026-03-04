function getIntersectionNode(headA: ListNode|null, headB:ListNode|null) :ListNode|null{
let a = headA
let b = headB

	while (a !== b) {
	a = a === null ? headB : a.next
    b = b === null ? headB : b.next
    }
	return a
}