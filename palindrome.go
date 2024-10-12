package main

import (
	"strconv"
)

func isPalindrome(x int) bool {
	str := strconv.Itoa(x)
	reverse := []rune(str)
	for i, j := 0, len(reverse)-1; i < j; i, j = i+1, j-1 {
		reverse[i], reverse[j] = reverse[j], reverse[i]
	}
	result, _ := strconv.Atoi(string(reverse))
	return x == result
}
