package squareroot

func mySqrt(x int) int {
	left := 0
	right := x
	answer := 0

	for left <= right {
		mid := (left + right) / 2

		if mid*mid == x {
			return mid
		}

		if mid*mid < x {
			answer = mid
			left = mid + 1
		} else {
			right = mid - 1
		}
	}

	return answer
}
