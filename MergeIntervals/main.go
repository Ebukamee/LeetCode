package mergeintervals

import "sort"

func merge(intervals [][]int) [][]int {
	if len(intervals) == 0 {
		return intervals
	}

	sort.Slice(intervals, func(i, j int) bool {
		return intervals[i][0] < intervals[j][0]
	})

	result := [][]int{}
	current := intervals[0]

	for i := 1; i < len(intervals); i++ {
		next := intervals[i]

		if next[0] <= current[1] {
			if next[1] > current[1] {
				current[1] = next[1]
			}
		} else {
			result = append(result, current)
			current = next
		}
	}

	result = append(result, current)

	return result
}
