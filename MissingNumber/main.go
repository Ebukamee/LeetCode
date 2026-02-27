package missingnumber

func missingNumber(nums []int) int {
	n := len(nums)
	expectedSum := (n * (n + 1)) / 2
	actualSum := 0

	for num := range nums {
		actualSum += num
	}
	return expectedSum - actualSum
}
