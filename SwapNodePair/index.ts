function swapPairs(head: ListNode | null): ListNode | null {
    const dummy = new ListNode(0,head)
    let prev : ListNode | null = dummy

    while (prev.next && prev.next.next) {
        let first = prev.next
        let second= first.next

        first.next = second.next
        second.next = first
        prev.next = second

        prev = first
    }
    return dummy.next
}