package finddifference

func findTheDifference(s string, t string) byte {
	var xor byte = 0

	for i := 0; i < len(s); i++ {
		xor ^= s[i]
	}

	for i := 0; i < len(t); i++ {
		xor ^= t[i]
	}

	return xor
}
