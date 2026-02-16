# LeetCode Problem: Jump Game II

## Problem Description
Given a 0-indexed array `nums`, each element represents the **maximum jump length from that index**.  
You start at index `0`. Return the **minimum number of jumps** needed to reach the last index (`n-1`).  
You are guaranteed that the last index is reachable.

### Example 1:
Input: nums = [2,3,1,1,4]
Output: 2
Explanation: Jump 1 step from index 0 → 1, then 3 steps to last index.


### Example 2:
Input: nums = [2,3,0,1,4]
Output: 2


### Constraints
- `1 <= nums.length <= 10^4`
- `0 <= nums[i] <= 1000`
- It is guaranteed you can reach the last index

---

## Approach (Step-by-Step)

1. **Use three variables**:
   - `jumps` → counts the number of jumps made.
   - `currentEnd` → farthest index reachable with **current jump**.
   - `farthest` → farthest index reachable **from positions seen so far**.

2. **Iterate over array (excluding last index)**:
   - For each index `i`, compute the farthest reachable:
     ```
     farthest = max(farthest, i + nums[i])
     ```

3. **Decide when to jump**:
   - If `i` reaches `currentEnd`:
     - Increment `jumps` → must jump to continue
     - Set `currentEnd = farthest` → new jump range

4. **Continue scanning**:
   - Keep updating `farthest` within the current jump range.
   - Only jump when necessary to maximize reach.

5. **Return jumps**:
   - After iteration, `jumps` = minimum jumps to reach the end.

---

### Intuition
- Each jump covers **maximum possible range**.
- Only jump **when reaching the end of the current jump range**.
- This **greedy approach guarantees minimum jumps**.