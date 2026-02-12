package maxareaofwater

func maxArea(height []int) int {
	left, right, maxArea := 0, len(height)-1, 0

	for left < right {

		minHeight := height[left]

		if height[left] > height[right] {
			minHeight = height[right]
		}
		width := right - left
		currentArea := width * minHeight

		if currentArea > maxArea {
			maxArea = currentArea
		}
		if height[left] < height[right] {
			left++
		} else {
			right++
		}
	}
	return maxArea

}
