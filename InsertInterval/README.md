# Insert Interval — Explanation

## Problem Summary
You are given a list of **non-overlapping intervals** sorted by start time, and a **new interval** to insert.  
Your task is to insert the new interval into the list and merge any overlapping intervals so that the result remains sorted and non-overlapping.

---

## Key Constraints
- Intervals are **sorted by start time**.
- Intervals are **non-overlapping**.
- After insertion, the list must remain **sorted** and **non-overlapping**.
- You may create a **new list**; in-place modification is not required.

---

## Step-by-Step Approach

### Step 1: Initialize Result List
- Create an empty list `result` to store the merged intervals.
- Keep track of the interval to insert as `newInterval`.

---

### Step 2: Iterate Through Existing Intervals
For each interval `current` in the original list:

#### Case 1: Interval Before New Interval
- If `current[1] < newInterval[0]`:
  - No overlap, completely before
  - Add `current` to `result`

#### Case 2: Interval After New Interval
- If `current[0] > newInterval[1]`:
  - No overlap, completely after
  - Add `newInterval` to `result`
  - Set `newInterval = current` for further processing

#### Case 3: Overlapping Interval
- Otherwise, `current` overlaps with `newInterval`
  - Merge by updating:
    - `newInterval[0] = min(newInterval[0], current[0])`
    - `newInterval[1] = max(newInterval[1], current[1])`

---

### Step 3: Add the Final Interval
- After the loop, add the last `newInterval` to `result`.

---

### Step 4: Return Result
- Return the `result` list containing merged intervals.

---


