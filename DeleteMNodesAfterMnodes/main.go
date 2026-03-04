package deletemnodesaftermnodes

func deleteNodes(head *ListNode, m int, n int) *ListNode {
	curr := head
	for curr != nil {
		for i := 1; i < m && curr != nil; i++ {
			curr = curr.Next
		}
		if curr == nil {
			break
		}

		temp := curr.Next
		for i := 0; i < n && temp != nil; i++ {
			temp = temp.Next
		}

		curr.Next = temp
		curr = temp
	}
	return head
}
