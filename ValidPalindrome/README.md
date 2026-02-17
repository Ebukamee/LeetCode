# LeetCode Problem: Valid Palindrome

## Problem Description
A phrase is a **palindrome** if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward.

Alphanumeric characters include **letters and numbers**.

### Example 1:
Input: s = "A man, a plan, a canal: Panama"  
Output: true  
Explanation: "amanaplanacanalpanama" is a palindrome.

### Example 2:
Input: s = "race a car"  
Output: false  
Explanation: "raceacar" is not a palindrome.

### Example 3:
Input: s = " "  
Output: true  
Explanation: After removing non-alphanumeric characters, the string is empty, which is considered a palindrome.

---

## Constraints
- `1 <= s.length <= 2 * 10⁵`
- `s` consists only of printable ASCII characters.

---

## Approach (Step-by-Step)

1. **Use two pointers**:
   - Initialize one pointer `left` at the start of the string.
   - Initialize another pointer `right` at the end of the string.
   - These pointers will move toward each other.

2. **Skip non-alphanumeric characters from the left**:
   - While `left` is less than `right` and the character at `left` is not alphanumeric,
     move `left` forward.
   - This removes spaces, punctuation, and symbols from consideration.

3. **Skip non-alphanumeric characters from the right**:
   - While `left` is less than `right` and the character at `right` is not alphanumeric,
     move `right` backward.

4. **Compare characters case-insensitively**:
   - Convert both characters at `left` and `right` to lowercase.
   - If they are not equal, the string is **not** a palindrome → return `false`.

5. **Move both pointers inward**:
   - Increment `left`.
   - Decrement `right`.
   - Continue checking the next valid pair.

6. **Finish the check**:
   - If all valid characters match and pointers cross, return `true`.

---

## Intuition
- A palindrome reads the same from both ends.
- Non-alphanumeric characters do not affect the palindrome property, so they are skipped.
- Case differences do not matter, so characters are compared in lowercase.
- The two-pointer technique allows this to be done efficiently in one pass.

---

## Complexity Analysis
- **Time Complexity:** `O(n)` — each character is visited at most once.
- **Space Complexity:** `O(1)` — no extra data structures are used.

---

### Key Takeaway
This problem is best solved by **skipping invalid characters and comparing valid ones from both ends**, ensuring an efficient and clean solution.
