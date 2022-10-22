package main

import "fmt"

func main() {
	// неупорядоченный массив
	out := twoSum([]int{0, 3, 12, 9}, 21)
	fmt.Println(out)
}

func twoSum(nums []int, target int) []int {
	hashMap := make(map[int]int)
	for index, value := range nums {
		if checkIndex, ok := hashMap[target-value]; ok {
			return []int{checkIndex, index}
		}

		hashMap[value] = index
	}
	return []int{}
}
