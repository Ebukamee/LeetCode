# Explanation of the Search Insert Position Algorithm

## Problem Overview

We have a sorted array of distinct integers and a target value. Our goal is to return the index of the target if it exists in the array. If it doesn't exist, we return the index where the target should be inserted to maintain the sorted order.

## Algorithm Explanation

1. **Initialize Pointers**:
   - `left` is set to `0`, the first index of the array.
   - `right` is set to `nums.length - 1`, the last index of the array.

2. **Binary Search Loop**:
   - We use a `while` loop that runs as long as `left` is less than or equal to `right`.
   - Within the loop, we calculate the middle index, `mid`, as the floor of `(left + right) / 2`.

3. **Check the Middle Value**:
   - If `nums[mid]` is equal to the target, we return `mid` because we found the target.
   - If `nums[mid]` is less than the target, we move the `left` pointer to `mid + 1`, focusing on the right half.
   - If `nums[mid]` is greater than the target, we move the `right` pointer to `mid - 1`, focusing on the left half.

4. **Insertion Point**:
   - If the loop ends without finding the target, `left` will be the correct position to insert the target so that the array remains sorted. We return `left`.

## Summary

The algorithm efficiently finds the target or the correct insertion index using binary search, ensuring a runtime complexity of O(log n).

