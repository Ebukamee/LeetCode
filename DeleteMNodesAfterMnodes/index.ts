function deleteNodes(head: ListNode | null, m: number, n: number): ListNode | null {
    let curr = head;
    while (curr !== null) {
        for (let i = 1; i < m && curr !== null; i++) {
            curr = curr.next;
        }
        if (curr === null) break;
        
        let temp = curr.next;
        for (let i = 0; i < n && temp !== null; i++) {
            temp = temp.next;
        }
        
        curr.next = temp;
        curr = temp;
    }
    return head;
}