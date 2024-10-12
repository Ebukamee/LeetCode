/**
 * @param {number} number
 * @return {number}
 */
const reverse = function(number) {
    // removimg an adding the minus for a non -positive number
    if(number < 0) {
        return -1 * reverse(-number)
    }
    // convert the number to string, split the spring reverse the spring array and the join it back toether
    const soln = (number + "").split("").reverse().join("")
    // return 0 if the solution is greater than 2^32
    if(soln > 2**31-1) {
        return 0
    }
    else {
        return soln
    }
};