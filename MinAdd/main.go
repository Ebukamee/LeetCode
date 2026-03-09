package minadd

func minAddToMakeValid(s string) int {

	balance := 0
	moves := 0

	for _, c := range s {

		if c == '(' {
			balance++
		} else {
			if balance > 0 {
				balance--
			} else {
				moves++
			}
		}
	}

	return moves + balance
}
