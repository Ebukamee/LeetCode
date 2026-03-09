function rotateRight(head: ListNode | null, k: number): ListNode | null {

    if (!head || !head.next) return head

    let length = 1
    let tail = head

    while (tail.next) {
        tail = tail.next
        length++
    }

    k = k % length

    if (k === 0) return head

    tail.next = head

    for (let i = 0; i < length - k; i++) {
        tail = tail.next!
    }

    const newHead = tail.next

    tail.next = null

    return newHead
}