package jumpgame

func jump(nums []int) int {
	jump := 0
	currentEnd := 0
	farthest := 0

	for i := 0; i < len(nums)-1; i++ {
		if i+nums[i] > farthest {
			farthest = i + nums[i]
		}
		if i == currentEnd {
			jump++
			currentEnd = farthest
		}
	}
	return jump
}
