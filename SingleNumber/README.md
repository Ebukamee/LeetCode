# LeetCode Problem: Single Number

## Problem Description
Given a **non-empty** array of integers `nums`, every element appears **exactly twice** except for **one element** which appears only once.

Your task is to find and return that **single** element.

You must implement a solution that:
- Runs in **linear time** `O(n)`
- Uses **constant extra space** `O(1)`

---

## Example 1:
Input: nums = [2,2,1]  
Output: 1  

### Example 2:
Input: nums = [4,1,2,1,2]  
Output: 4  

### Example 3:
Input: nums = [1]  
Output: 1  

---

## Constraints
- `1 <= nums.length <= 3 * 10⁴`
- `-3 * 10⁴ <= nums[i] <= 3 * 10⁴`
- Every element appears **twice** except for one.

---

## Approach (Step-by-Step)

1. **Understand the key property**:
   - XOR of a number with itself is `0`.
   - XOR of a number with `0` is the number itself.

2. **Initialize a variable to store the result**:
   - Start with `result = 0`.

3. **Iterate through the array**:
   - For each number in the array, apply XOR with `result`.
   - Duplicate numbers cancel each other out.

4. **Observe what remains**:
   - All numbers that appear twice become `0`.
   - The number that appears once remains.

5. **Return the result**:
   - The final value of `result` is the single number.

---

## Intuition
- XOR is **order-independent**, so the position of numbers does not matter.
- Pairwise duplicates eliminate each other.
- Only the unique number survives the XOR process.

---

## Complexity Analysis
- **Time Complexity:** `O(n)` — one pass through the array.
- **Space Complexity:** `O(1)` — no extra data structures used.

---

### Key Takeaway
Using XOR allows you to solve the problem **optimally**, meeting both the time and space constraints without sorting or additional memory.
