package movezeros

func moveZeroes(nums []int) {
	writeIndex := 0

	for i := 0; i < len(nums); i++ {
		if nums[i] != 0 {
			nums[writeIndex] = nums[i]
			writeIndex++
		}
	}

	for writeIndex < len(nums) {
		nums[writeIndex] = 0
		writeIndex++
	}
}
