function subarraySum(nums: number[], k: number): number {
    let count = 0;
    let prefixSum = 0;
    const prefixSumMap = new Map<number, number>();
    prefixSumMap.set(0, 1);

    for (const num of nums) {
        prefixSum += num;

        if (prefixSumMap.has(prefixSum - k)) {
            count += prefixSumMap.get(prefixSum - k)!;
        }
        prefixSumMap.set(prefixSum, (prefixSumMap.get(prefixSum) || 0) + 1);
    }
    return count;
};