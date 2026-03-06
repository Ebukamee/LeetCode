package maximum69number

func maximum69Number(num int) int {

	s := strconv.Itoa(num)
	changed := false
	result := ""

	for _, c := range s {

		if c == '6' && !changed {
			result += "9"
			changed = true
		} else {
			result += string(c)
		}
	}

	val, _ := strconv.Atoi(result)
	return val
}
