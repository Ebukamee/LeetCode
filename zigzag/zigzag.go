package main

import "strings"

func convert(s string, numRows int) string {
	if numRows == 1 {
		return s
	}
	rows := make([]string, numRows)
	goingDown := true
	currentRow := 0
	for _, char := range s {
		rows[currentRow] += string(char)
		if currentRow == 0 {
			goingDown = true
		}
		if currentRow == numRows-1 {
			goingDown = false
		}
		if goingDown {
			currentRow++
		} else {
			currentRow--
		}
	}
	return strings.Join(rows, "")
}
