package reversewordsinstringiii

import "strings"

func reverseWords(s string) string {
	words := strings.Split(s, " ")

	for i, word := range words {
		runes := []rune(word)
		left, right := 0, len(runes)-1

		for left < right {
			runes[left], runes[right] = runes[right], runes[left]
			left++
			right--
		}

		words[i] = string(runes)
	}

	return strings.Join(words, " ")
}
