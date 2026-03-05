package defangingipaddress

func defangIPaddr(address string) string {
	result := ""

	for _, char := range address {
		if char == '.' {
			result += "[.]"
		} else {
			result += string(char)
		}
	}

	return result
}
