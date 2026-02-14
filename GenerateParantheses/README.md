# Generate Parentheses — Explanation

## Problem Summary
Given an integer `n`, generate all possible combinations of `n` pairs of valid parentheses.

---

## Key Constraints
- Exactly `n` opening and `n` closing parentheses must be used
- A closing parenthesis cannot appear before its matching opening one
- Only valid combinations should be generated

---

## Step-by-Step Approach

### Step 1: Build Strings Incrementally
Instead of generating all possible strings and filtering later:
- Build the string one character at a time
- Stop early if the string becomes invalid

---

### Step 2: Track Parenthesis Counts
At each step, track:
- Number of opening parentheses used
- Number of closing parentheses used

---

### Step 3: Add Opening Parentheses Carefully
An opening parenthesis can be added only if:
- The number of opening parentheses used is less than `n`

---

### Step 4: Add Closing Parentheses Carefully
A closing parenthesis can be added only if:
- The number of closing parentheses used is less than the number of opening ones

This prevents invalid sequences.

---

### Step 5: Save Completed Combinations
When both opening and closing counts reach `n`:
- The combination is complete
- It is added to the result list

---

## Why This Approach Works
- Uses backtracking efficiently
- Avoids generating invalid sequences
- Explores only valid solution paths

---

## Complexity
- Time Complexity: **O(4ⁿ / √n)**
- Space Complexity: **O(n)**
