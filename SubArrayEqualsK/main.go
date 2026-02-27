package subarrayequalsk

func subarraySum(nums []int, k int) int {
	count := 0
	prefixSum := 0
	prefixSumMap := make(map[int]int)
	prefixSumMap[0] = 1
	for _, num := range nums {
		prefixSum += num

		if val, exists := prefixSumMap[prefixSum-k]; exists {
			count += val
		}
		prefixSumMap[prefixSum] = prefixSumMap[prefixSum] + 1
	}
	return count
}
