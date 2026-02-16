# LeetCode Problem: Swap Nodes in Pairs

## Problem Description
Given a linked list, swap every two adjacent nodes and return its head.  
You **cannot** modify the values in the nodes — only the nodes themselves can be changed.

### Example 1:
Input: head = [1,2,3,4]
Output: [2,1,4,3]


### Example 2:
Input: head = []
Output: []


### Example 3:
Input: head = [1]
Output: [1]


### Constraints
- The number of nodes in the list is in the range `[0, 100]`
- `0 <= Node.val <= 100`

---

## Approach (Step-by-Step)

1. **Use a dummy node**:
   - Create a dummy node pointing to the head of the list.
   - This simplifies edge cases, like swapping the first two nodes.

2. **Initialize a pointer**:
   - Use a pointer `prev` starting at the dummy node.
   - This pointer will be used to reconnect swapped pairs.

3. **Iterate while pairs exist**:
   - Check if `prev.next` and `prev.next.next` exist.
   - These two nodes form the pair to swap.

4. **Swap nodes in the pair**:
   - Let `first = prev.next` and `second = prev.next.next`.
   - Change the connections:
     - `prev.next` points to `second`
     - `first.next` points to `second.next`
     - `second.next` points to `first`
   - Now the pair is swapped.

5. **Move pointer forward**:
   - Move `prev` to `first` (the second node in the swapped pair).
   - Repeat until all pairs are processed.

6. **Return the new head**:
   - `dummy.next` is the head of the swapped list.

---

### Intuition
- Always swap **nodes**, not values.
- Using a dummy node and a pointer avoids special-casing the head.
- The algorithm processes **two nodes at a time** until the end.