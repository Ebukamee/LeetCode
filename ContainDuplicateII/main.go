package containduplicate

func containsNearbyDuplicate(nums []int, k int) bool {
	lastSeen := make(map[int]int)

	for i, num := range nums {
		if prevIndex, ok := lastSeen[num]; ok {
			if i-prevIndex <= k {
				return true
			}
		}
		lastSeen[num] = i
	}

	return false
}
