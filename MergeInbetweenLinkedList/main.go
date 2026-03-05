package mergeinbetweenlinkedlist

func mergeInBetween(list1 *ListNode, a int, b int, list2 *ListNode) *ListNode {
	start := list1
	for i := 1; i < a; i++ {
		start = start.Next
	}

	end := start
	for i := a; i <= b+1; i++ {
		end = end.Next
	}

	start.Next = list2

	curr2 := list2
	for curr2.Next != nil {
		curr2 = curr2.Next
	}

	curr2.Next = end
	return list1
}
