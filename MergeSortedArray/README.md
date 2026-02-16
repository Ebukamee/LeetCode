# Merge Sorted Arrays

**Problem:**  
You are given two sorted arrays, `nums1` and `nums2`.  
- `nums1` has extra space at the end to hold all elements of `nums2`.  
- Merge `nums2` into `nums1` so that `nums1` remains sorted.

**Example:**
nums1 = [1,2,3,0,0,0], nums2 = [2,5,6]
Output: [1,2,2,3,5,6]


## My Approach

1) Start from the end of both arrays:  
   - Let `i` point to the last valid element of `nums1`.  
   - Let `j` point to the last element of `nums2`.  
   - Let `k` point to the last position of `nums1`.  

2) Loop while there are still elements in `nums2`.  

3) Compare `nums1[i]` and `nums2[j]`:  
   - Place the larger value at `nums1[k]`.  
   - Move the pointer (`i` or `j`) backward.  

4) Move `k` backward to fill the next position.  

5) Repeat until all elements of `nums2` are merged.

**Key Idea:**  
- Fill `nums1` from the back so you never overwrite elements you still need to compare.  
- Always place the largest remaining number first.

**Why This Works:**  
- Each number is placed exactly once.  
- The resulting array is sorted.  
- Extra space is not needed.
