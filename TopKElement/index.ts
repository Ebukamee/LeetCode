function topKFrequent(nums: number[], k: number): number[] {
    const freqMap = new Map<number, number>();

    for (let num of nums) {
        freqMap.set(num, (freqMap.get(num) || 0) + 1);
    }

    const buckets: number[][] = Array(nums.length + 1)
        .fill(0)
        .map(() => []);

    for (let [num, freq] of freqMap) {
        buckets[freq].push(num);
    }

    const result: number[] = [];

    for (let i = buckets.length - 1; i >= 0 && result.length < k; i--) {
        for (let num of buckets[i]) {
            result.push(num);
            if (result.length === k) break;
        }
    }

    return result;
}