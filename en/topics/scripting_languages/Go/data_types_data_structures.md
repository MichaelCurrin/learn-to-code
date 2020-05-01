# Data types - data structures

Based on [Learn X in Y](https://learnxinyminutes.com/docs/go/).


## Array

List of elements, with fixed length.

```go
// Initialize to four zeroes.
var my_array [4]int

// Infer the size. Still fixed length.
my_array2 = [...]int{1, 2, 3, 4}

// Copy to new instance.
copied_array := my_array
// Update value (in copy only).
copied_array[0] = 100
// False
fmt.Println(my_array[0] == copied_array[0]
```

## Slice

List of elements. Slices have dynamic length and are more commonly used than arrays.

```go
// No ellipsis.
my_slice = []int{1, 2, 3, 4}

my_slice2 = make([]int, 4)

var float_slice = [][]float64
```

