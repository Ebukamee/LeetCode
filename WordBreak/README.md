# LeetCode Problem: Word Break

## Problem Description
Given a string `s` and a dictionary of strings `wordDict`, determine whether `s` can be segmented into a **space-separated sequence of one or more dictionary words**.

- Each word in `wordDict` may be used **multiple times**.
- You only need to return `true` or `false` — not the actual segmentation.

---

## Example 1:
Input:  
s = "leetcode"  
wordDict = ["leet", "code"]  

Output: `true`  

Explanation:  
"leetcode" can be segmented as `"leet code"`.

---

## Example 2:
Input:  
s = "applepenapple"  
wordDict = ["apple", "pen"]  

Output: `true`  

Explanation:  
"applepenapple" can be segmented as `"apple pen apple"`.  
The same dictionary word can be reused.

---

## Example 3:
Input:  
s = "catsandog"  
wordDict = ["cats", "dog", "sand", "and", "cat"]  

Output: `false`  

Explanation:  
There is no valid way to segment the string using only dictionary words.

---

## Constraints
- `1 <= s.length <= 300`
- `1 <= wordDict.length <= 1000`
- `1 <= wordDict[i].length <= 20`
- All strings consist of lowercase English letters.

---

## Approach (Step-by-Step)

1. **Use Dynamic Programming (DP)**:
   - Create a boolean array `dp` where `dp[i]` means:
     > Can the substring `s[0:i]` be segmented using the dictionary?

2. **Initialize the base case**:
   - Set `dp[0] = true`
   - An empty string can always be segmented.

3. **Iterate over the string**:
   - For each position `i` from `1` to `len(s)`:
     - Check all possible previous split positions `j` where `0 <= j < i`.

4. **Check dictionary membership**:
   - If `dp[j]` is `true` **and**
     `s[j:i]` exists in `wordDict`,
     then set `dp[i] = true`.

5. **Early break for efficiency**:
   - Once `dp[i]` becomes `true`, stop checking further splits for that `i`.

6. **Final result**:
   - Return `dp[len(s)]`.

---

## Intuition
- The problem asks: *“Can I reach the end of the string by making valid word jumps?”*
- Each valid word acts like a **step forward**.
- If you can reach position `i` from a previous valid position `j`, mark it reachable.
- This avoids recomputation and handles reuse naturally.

---

## Complexity Analysis
- **Time Complexity:** `O(n²)`  
  - Two nested loops over the string length.
- **Space Complexity:** `O(n)`  
  - DP array of size `n + 1`.

---

### Key Takeaway
This is a classic **dynamic programming segmentation problem**:
- Break the string into prefixes.
- Reuse previously solved subproblems.
- If the end is reachable, the answer is `true`.

Once you see `“can this string be broken into valid words?”`,  
**DP should immediately come to mind.**
