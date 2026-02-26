package summaryranges

import "fmt"

func summaryRanges(nums []int) []string {
	result := []string{}

	if len(nums) == 0 {
		return result
	}
	start := nums[0]

	for i := 0; i < len(nums); i++ {
		if i == len(nums)-1 || nums[i+1] != nums[i]+1 {
			if start == nums[i] {
				result = append(result, fmt.Sprintf("%d", start))
			} else {
				result = append(result, fmt.Sprintf("%d->%d", start, nums[i]))
			}
			if i < len(nums)-1 {
				start = nums[i+1]
			}
		}
	}
	return result
}
