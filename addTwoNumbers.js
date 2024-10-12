/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */
const addTwoNumbers = function(l1, l2) {
    let uno = l1,
        dos = l2,
        num1 = 0,
        num2= 0,
        carry = 0,
        solution = new ListNode(0),
        current = solution;

    while (uno || dos) {
        num1 = (uno) ? uno.val : 0;
        num2 = (dos) ? dos.val : 0;

        if (num1 + num2 + carry >9) {
            current.next = new ListNode(num1 + num2 + carry - 10);
            current = current.next;
            carry = 1;
        }
        else {
            current.next = new ListNode(num1 + num2 + carry);
            current = current.next;
            carry = 0;
        }
        if (uno) {
            uno = uno.next
        }
        if (dos) {
            dos = dos.next
        }
    }
    if (carry) {
        current.next = new ListNode(carry);
    }
    return solution.next
        
};