package main

import (
	"fmt"
	"strconv"
)

func main() {
	fmt.Println(isPalindrome(121))
}

func isPalindrome(number int) bool {
	str := strconv.Itoa(number)
	var newStr string
	for i := len(str) - 1; i >= 0; i-- {
		newStr = newStr + string(str[i])
	}

	newInt, _ := strconv.Atoi(newStr)
	return number == newInt
}
