package main

func twoSum(nums []int, target int) []int {
	stored := map[int]int{}

	for i, num := range nums {
		number := num
		if index, found := stored[number]; found {
			return []int{index, i}
		}
		stored[target-num] = i
	}
	return nil
}
