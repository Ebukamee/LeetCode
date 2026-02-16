# Remove Duplicates from Sorted Linked List

**Problem:**  
Given the head of a sorted linked list, remove all duplicates so that each element appears only once. Return the sorted linked list.

**Example:**
Input: 1 -> 1 -> 2
Output: 1 -> 2


## My Approach

1) Start with a variable `current` pointing to the head of the list.  
2) Loop while both `current` and `current.next` exist:  
   - If `current.val` is equal to `current.next.val`, skip the next node.  
   - Otherwise, move `current` forward.  
3) Continue until you reach the end of the list.  
4) Return the head.

**Key Idea:**  
- Since the list is sorted, any duplicates are next to each other.  
- You can simply skip over duplicates while traversing the list.

**Why This Works:**  
- Only one pass through the list is needed.  
- No extra memory is required.  
- The list remains sorted after duplicates are removed.

