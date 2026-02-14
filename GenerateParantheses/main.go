package generateparantheses

func generateParenthesis(n int) []string {
	var result []string
	backtrack("", 0, 0, n, &result)
	return result
}

func backtrack(current string, open int, close int, n int, result *[]string) {
	if len(current) == 2*n {
		*result = append(*result, current)
		return
	}

	if open < n {
		backtrack(current+"(", open+1, close, n, result)
	}

	if close < open {
		backtrack(current+")", open, close+1, n, result)
	}
}
