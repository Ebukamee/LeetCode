package tolowercase

func toLowerCase(s string) string {
	result := []rune{}

	for _, ch := range s {
		if ch >= 'A' && ch <= 'Z' {
			result = append(result, ch+32)
		} else {
			result = append(result, ch)
		}
	}

	return string(result)
}
