package validpalindrome

func isPalindrome(s string) bool {
	left, right := 0, len(s)-1

	for left < right {
		for left < right && !isAlphaNumeric(s[left]) {
			left++
		}
		for left < right && !isAlphaNumeric(s[right]) {
			right--
		}
		if toLower(s[left]) != toLower(s[right]) {
			return false
		}
		left++
		right--
	}
	return true
}
func isAlphaNumeric(c byte) bool {
	return (c >= 'A' && c <= 'Z') || (c >= 'a' && c <= 'z') || (c >= '0' && c <= '9')
}
func toLower(c byte) byte {
	if c >= 'A' && c <= 'Z' {
		return c + 32
	}
	return c
}
