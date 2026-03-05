function mergeInBetween(list1: ListNode | null, a: number, b: number, list2: ListNode | null): ListNode | null {
    let start = list1;
    for (let i = 1; i < a; i++) {
        start = start!.next;
    }
    
    let end = start;
    for (let i = a; i <= b + 1; i++) {
        end = end!.next;
    }
    
    start!.next = list2;
    
    let curr2 = list2;
    while (curr2!.next !== null) {
        curr2 = curr2!.next;
    }
    
    curr2!.next = end;
    return list1;
}