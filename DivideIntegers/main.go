package divideintegers

func divide(dividend int, divisor int) int {
	if dividend == -1<<31 && divisor == -1 {
		return 1<<31 - 1
	}
	negative := (dividend < 0) != (divisor < 0)

	a, b, result := abs(dividend), abs(divisor), 0

	for a >= b {
		temp := b
		multiple := 1

		for a >= (temp << 1) {
			temp <<= 1
			multiple <<= 1
		}
		a -= temp
		result += multiple
	}
	if negative {
		return -result
	}
	return result
}

func abs(a int) int {
	if a < 0 {
		return -a
	}
	return a
}
