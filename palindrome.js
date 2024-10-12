/**
 * @param {number} num
 * @return {boolean}
 */
const isPalindrome = function(num) {
    const reverse = (num + "").split("").reverse().join("")
   return num === reverse
};