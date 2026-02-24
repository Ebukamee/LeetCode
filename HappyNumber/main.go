package happynumber

func isHappy(n int) bool {
	seen := make(map[int]bool)

	for n != 1 {
		if seen[n] {
			return false
		}

		seen[n] = true
		n = sumOfSquares(n)
	}

	return true
}

func sumOfSquares(num int) int {
	sum := 0

	for num > 0 {
		digit := num % 10
		sum += digit * digit
		num /= 10
	}

	return sum
}
