package rotatelist

func rotateRight(head *ListNode, k int) *ListNode {

	if head == nil || head.Next == nil {
		return head
	}

	length := 1
	tail := head

	for tail.Next != nil {
		tail = tail.Next
		length++
	}

	k = k % length

	if k == 0 {
		return head
	}

	tail.Next = head

	for i := 0; i < length-k; i++ {
		tail = tail.Next
	}

	newHead := tail.Next
	tail.Next = nil

	return newHead
}
