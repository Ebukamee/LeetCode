package equivalentstring

import "strings"

func arrayStringsAreEqual(word1 []string, word2 []string) bool {

	str1 := strings.Join(word1, "")
	str2 := strings.Join(word2, "")

	return str1 == str2
}
