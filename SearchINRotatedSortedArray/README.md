# LeetCode Problem: Search in Rotated Sorted Array

## Problem Description
You are given an array `nums` that was **originally sorted in ascending order** and then **rotated at an unknown index k**.  
Given a target value, return its index if it exists; otherwise, return -1.  
Your solution must run in **O(log n)** time.

### Example 1:
Input: nums = [4,5,6,7,0,1,2], target = 0
Output: 4


### Example 2:
Input: nums = [4,5,6,7,0,1,2], target = 3
Output: -1


### Example 3:
Input: nums = [1], target = 0
Output: -1


### Constraints
- `1 <= nums.length <= 5000`
- `-10^4 <= nums[i] <= 10^4`
- All values in `nums` are **distinct**
- `nums` is **rotated at some unknown index**

---

## Approach (Step-by-Step)

1. **Initialize pointers**:
   - `left = 0`, `right = nums.length - 1`
   - These track the current search range.

2. **Binary search loop**:
   - While `left <= right`:
     1. Compute `mid = left + (right - left) / 2`
     2. If `nums[mid] == target`, return `mid`.

3. **Determine which half is sorted**:
   - If `nums[left] <= nums[mid]` → left half is sorted.
   - Else → right half is sorted.

4. **Check if target lies in sorted half**:
   - **Left sorted**:
     - If `nums[left] <= target < nums[mid]`, search left (`right = mid - 1`)
     - Else search right (`left = mid + 1`)
   - **Right sorted**:
     - If `nums[mid] < target <= nums[right]`, search right (`left = mid + 1`)
     - Else search left (`right = mid - 1`)

5. **Repeat**:
   - Keep narrowing the search range until the target is found or range is empty.

6. **Return -1 if not found**

---

### Intuition
- Rotation ensures that **at least one half is always sorted**.
- By checking which half is sorted and if the target fits in it, you can **discard the other half**.
- This guarantees **O(log n)** runtime.