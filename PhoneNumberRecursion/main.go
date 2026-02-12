package phonenumberrecursion

func letterCombinations(digits string) []string {

	if len(digits) == 0 {
		return []string{}
	}

	phone := map[byte]string{
		'2': "abc",
		'3': "def",
		'4': "ghi",
		'5': "jkl",
		'6': "mno",
		'7': "pqrs",
		'8': "tuv",
		'9': "wxyz",
	}

	result := []string{}

	var RecursiveBuild func(int, string)
	RecursiveBuild = func(i int, c string) {
		if i == len(digits) {
			result = append(result, c)
			return
		}

		letters := phone[digits[i]]

		for _, ch := range letters {
			RecursiveBuild(i+1, c+string(ch))
		}
	}
	RecursiveBuild(0, "")
	return result
}
