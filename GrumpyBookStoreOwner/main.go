package grumpybookstoreowner

func maxSatisfied(customers []int, grumpy []int, minutes int) int {
	baseSatisfied := 0
	extraSatisfied := 0
	maxExtraSatisfied := 0

	for i := 0; i < len(customers); i++ {
		if grumpy[i] == 0 {
			baseSatisfied += customers[i]
		}
	}

	for i := 0; i < minutes; i++ {
		if grumpy[i] == 1 {
			extraSatisfied += customers[i]
		}
	}

	maxExtraSatisfied = extraSatisfied

	for i := minutes; i < len(customers); i++ {
		if grumpy[i] == 1 {
			extraSatisfied += customers[i]
		}
		if grumpy[i-minutes] == 1 {
			extraSatisfied -= customers[i-minutes]
		}
		if extraSatisfied > maxExtraSatisfied {
			maxExtraSatisfied = extraSatisfied
		}
	}

	return baseSatisfied + maxExtraSatisfied
}
