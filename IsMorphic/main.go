package ismorphic

func isIsomorphic(s string, t string) bool {
	if len(s) != len(t) {
		return false
	}

	sToT := make(map[byte]byte)
	tToS := make(map[byte]byte)

	for i := 0; i < len(s); i++ {
		charS := s[i]
		charT := t[i]

		if val, ok := sToT[charS]; ok {
			if val != charT {
				return false
			}
		} else {
			if val, ok := tToS[charT]; ok && val != charS {
				return false
			}
			sToT[charS] = charT
			tToS[charT] = charS
		}
	}

	return true
}
