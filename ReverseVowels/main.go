package reversevowels

func reverseVowels(s string) string {
	vowels := map[byte]bool{
		'a': true, 'e': true, 'i': true, 'o': true, 'u': true,
		'A': true, 'E': true, 'I': true, 'O': true, 'U': true,
	}

	arr := []byte(s)
	left, right := 0, len(arr)-1

	for left < right {
		for left < right && !vowels[arr[left]] {
			left++
		}
		for left < right && !vowels[arr[right]] {
			right--
		}

		arr[left], arr[right] = arr[right], arr[left]
		left++
		right--
	}

	return string(arr)
}
