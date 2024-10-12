/**
 * @param (number[]) nums
 * @param (number) target
 * @return (number[])
 */

const twoSum = function(nums,target) {
    let storedValues = {};

    for (let [i,num] of nums.entries()) {
        if (storedValues[num] !== undefined) {
            return [storedValues[num], i];
        }
        storedValues[target - num] = i;
    }
};