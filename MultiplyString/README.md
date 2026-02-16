# Multiply Strings Without Using BigInt

**Problem:**  
Multiply two non-negative integers represented as strings and return the product as a string.  
- You cannot convert the strings directly to integers or use BigInt.

**Example:**
num1 = "123", num2 = "456"
Output: "56088"

## My Approach

1) Think of how you multiply numbers by hand, **digit by digit**.  

2) Prepare an array to store the result.  
   - Its maximum size is `length(num1) + length(num2)`.

3) Multiply each digit of `num1` with each digit of `num2`:  
   - Add the product to the correct position in the result array.  
   - Handle the carry for each position.

4) Convert the result array to a string:  
   - Skip any leading zeros.  

5) Return the final string.

**Key Idea:**  
- Treat strings as arrays of digits.  
- Multiply and add digits manually like on paper.  
- Use the result array to handle carry and positions.

**Why This Works:**  
- Simulates manual multiplication.  
- Works for very large numbers beyond native integer limits.  
- No extra libraries are needed.
