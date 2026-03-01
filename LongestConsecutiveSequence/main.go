package longestconsecutivesequence

func longestConsecutive(nums []int) int {
	set := make(map[int]bool)
	for _, num := range nums {
		set[num] = true
	}

	longest := 0

	for num := range set {
		if !set[num-1] {
			current := num
			count := 1

			for set[current+1] {
				current++
				count++
			}

			if count > longest {
				longest = count
			}
		}
	}

	return longest
}
