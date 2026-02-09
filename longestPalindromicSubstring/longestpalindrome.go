package longestpalindromicsubstring

func longestPalindrome(s string) string {
	n := len(s)
	if n < 2 {
		return s
	}

	start := 0
	maxLen := 0

	expand := func(left, right int) {
		for left >= 0 && right < n && s[left] == s[right] {
			left--
			right++
		}
		if right-left-1 > maxLen {
			start = left + 1
			maxLen = right - left - 1
		}
	}

	for i := 0; i < n; i++ {
		expand(i, i)
		expand(i, i+1)
	}

	return s[start : start+maxLen]
}
