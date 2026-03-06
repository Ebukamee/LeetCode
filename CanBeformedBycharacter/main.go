package main

func countCharacters(words []string, chars string) int {

	total := 0
	base := map[rune]int{}

	for _, c := range chars {
		base[c]++
	}

	for _, word := range words {

		temp := map[rune]int{}
		valid := true

		for _, c := range word {
			temp[c]++

			if temp[c] > base[c] {
				valid = false
				break
			}
		}

		if valid {
			total += len(word)
		}
	}

	return total
}
