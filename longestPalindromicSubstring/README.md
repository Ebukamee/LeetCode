# Longest Palindromic Substring

## Problem Description

Given a string `s`, the task is to find the **longest substring that reads the same forwards and backwards** (a palindrome). The substring must be contiguous.  

### Examples

- Input: `"babad"` → Output: `"bab"` (or `"aba"`)  
- Input: `"cbbd"` → Output: `"bb"`  

### Constraints

- `1 <= s.length <= 1000`  
- `s` consists of digits and English letters only  

---

## Solution Overview

A palindrome can be centered on a single character (odd length) or between two characters (even length).  

The algorithm follows these steps:

1. **Iterate through each character** in the string as a potential palindrome center.  
2. **Expand outwards** from the center while the characters on both sides match.  
3. **Track the longest palindrome** discovered during this process.  
4. Repeat for both **odd-length and even-length centers**.  

At the end, return the substring corresponding to the longest palindrome found.

---

## Key Points

- Single-letter substrings are considered palindromes.  
- Expansion stops when the left or right index exceeds the string bounds, or the characters no longer match.  
- The approach ensures **O(n²) time complexity**, which is acceptable for `n <= 1000`.  
- Space complexity is **O(1)** beyond the input and output, as we only store indices and lengths.  

---

## Example Walkthrough

Input: `"babad"`

1. Center at index `0` (`'b'`) → expand → `"bab"`  
2. Center at index `1` (`'a'`) → expand → `"aba"`  
3. Longest palindrome = `"bab"` or `"aba"`  

Input: `"cbbd"`

1. Center at index `1` (`'b'`) → expand → `"bb"`  
2. Longest palindrome = `"bb"`

---

## Why This Approach Works

- Every palindrome must have a center. By expanding around all possible centers, the algorithm ensures **all palindromes are considered**.  
- Avoids checking all possible substrings explicitly, which would be less efficient.  
- Maintains a simple **constant space approach** by storing only the starting index and length of the longest palindrome.  

---

