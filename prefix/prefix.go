package prefix

func longestCommonPrefix(strs []string) string {
	if len(strs) == 0 {
		return ""
	}

	prefix := strs[0]

	for _, word := range strs[1:] {
		for len(prefix) > 0 && len(word) < len(prefix) || prefix != word[:len(prefix)] {
			prefix = prefix[:len(prefix)-1]
		}
		if prefix == "" {
			return ""
		}
	}
	return prefix
}
