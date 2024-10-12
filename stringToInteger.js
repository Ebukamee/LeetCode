/**
 * @param {string} s
 * @return {number} n
 */
function myAtoi(s) {
  let i = 0;
  let result = 0;
  let isNeg = false;

  while (s[i] === " ") {
    i++;
  }
  if (s[i] === "+" || s[i] === "-") {
    isNeg = s[i] === "-";
    i++;
  }
  for (i; i < s.length; i++) {
    const value = s.charCodeAt(i) - 48;
    if (value < 0 || value > 9) {
      break;
    }
    result *= 10;
    result += value;
  }
  if (isNeg) {
    result = -result;
  }
  const answer = Math.max(-(2 ** 31), Math.min(2 ** 31 - 1, result));
  return answer;
}
