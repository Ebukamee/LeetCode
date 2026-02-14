# Divide Two Integers — Explanation

## Problem Summary
You are given two integers:
- `dividend`
- `divisor`

Your task is to divide the two numbers **without using multiplication, division, or modulus operators** and return the result truncated toward zero.

---

## Important Constraints
- The result must fit within a **32-bit signed integer**
- Overflow must be handled explicitly
- Only addition, subtraction, and bit operations are allowed

---

## Step-by-Step Approach

### Step 1: Handle the Overflow Case
There is one dangerous case:
- The smallest 32-bit integer divided by `-1`

This produces a value larger than allowed, so the maximum integer value is returned immediately.

---

### Step 2: Determine the Sign of the Result
The result is negative **only if exactly one** of the numbers is negative.

This decision is stored early so the rest of the logic can ignore signs.

---

### Step 3: Convert Both Numbers to Positive
Both numbers are converted to their absolute values.

This simplifies the division logic by avoiding negative arithmetic.

---

### Step 4: Perform Division Using Doubling
Instead of subtracting the divisor one unit at a time:
- The divisor is doubled repeatedly
- Each doubled value is subtracted from the dividend
- The count of how many times it fits is tracked

This simulates division efficiently.

---

### Step 5: Apply the Final Sign
Once the magnitude of the result is known:
- Apply the sign decided earlier
- Return the final value

---

## Why This Approach Works
- Avoids forbidden operators
- Handles overflow safely
- Runs efficiently using exponential subtraction

---

## Complexity
- Time Complexity: **O(log n)**
- Space Complexity: **O(1)**
