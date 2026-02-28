package studentattendancerecordi

func checkRecord(s string) bool {
	absentCount := 0
	lateStreak := 0

	for _, char := range s {
		if char == 'A' {
			absentCount++
			lateStreak = 0
		} else if char == 'L' {
			lateStreak++
			if lateStreak == 3 {
				return false
			}
		} else {
			lateStreak = 0
		}

		if absentCount == 2 {
			return false
		}
	}

	return true
}
