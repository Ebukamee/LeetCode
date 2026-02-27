# 1. Problem Overview

We have an array of integers, and we need to find all unique sets of three numbers (triplets) such that they sum to zero. The constraints are:

Each number in the triplet must be distinct (no repeated indices).

The result must contain only unique triplets (no duplicates).

# 2. Why Sorting is Essential

Before we do anything, we sort the array in ascending order. Sorting is crucial because it allows us to apply a two-pointer technique later. Once the array is sorted, we can systematically explore combinations of numbers, and we can easily detect and skip duplicates. Without sorting, we would have no structure to guide our searches.

# 3. Fixing One Number (Outer Loop)

We run a loop that iterates over each element of the array up until the third-last element. The reason we stop at the third-last element is that we need at least two other numbers to pair with it. In other words, once we fix one number, we still need to find two others, so we don’t allow i to reach a point where there aren’t two numbers left after it.

# 4. Skipping Duplicates (Preventing Repeated Triplets)

After selecting the current number as the fixed anchor, we check whether it’s a duplicate of the previous number. If it is, we skip this iteration. This ensures that each value is used as a fixed anchor only once. Without this step, we would produce the same triplet multiple times, which would violate the uniqueness requirement.

# 5. Two-Pointer Approach (Left and Right Pointers)

Once we’ve fixed the current number, we set two pointers: one called "left," which starts just after the fixed number, and one called "right," which starts at the end of the array. By moving these pointers toward each other, we efficiently search for pairs that, together with the fixed number, sum to zero.

# 6. Evaluating the Sum

Inside the loop, we compute the sum of the three numbers: the fixed number, the left pointer, and the right pointer. There are three possible outcomes:

If the sum is exactly zero, we’ve found a valid triplet, so we record it.

If the sum is less than zero, it means we need a larger number, so we move the left pointer to the right.

If the sum is greater than zero, it means we need a smaller number, so we move the right pointer to the left.

This two-pointer approach reduces the time complexity by avoiding a nested loop.

# 7. Skipping Duplicates After a Match

When we do find a valid triplet, we must ensure we skip any duplicate numbers on both sides. After storing the triplet, we move the left pointer forward as long as the next number is identical, and similarly, we move the right pointer backward if the next number is identical. After skipping duplicates, we continue moving inward.

# 8. Completion and Result

We repeat this process until we have gone through all possible fixed numbers. Once all iterations are done, we return the result array, which now contains all unique triplets that sum to zero.

# 9. Why This Approach is Efficient

By sorting once and then using the two-pointer technique, we reduce the time complexity from a brute-force O(n³)