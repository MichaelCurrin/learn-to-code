# Data types: Data structures

Based on [Learn X in Y](https://learnxinyminutes.com/docs/go/).

Note that is import is needed for the prints to work.

```go
import (
	"fmt"
)
```

## Array

List of elements, with fixed length.

```go
// Initialize to four zeroes.
var my_array [4]int

// Infer the size. Still fixed length.
my_array2 = [...]int{1, 2, 3, 4}
my_array2[0] = -1
```

Arrays have _value_ semantics so values are kept separate.

```
// Copy to new instance.
array_copy := my_array
// Update value (in copy only).
array_copy[0] = 100
// false
fmt.Println(my_array[0] == array_copy[0]
```

## Slice

List of elements. Slices have dynamic length and are more commonly used than arrays.

```go
// No ellipsis.
my_slice = []int{1, 2, 3, 4}

my_slice2 = make([]int, 4)

var float_slice = [][]float64
```

Slices have _reference_ semantics, so values are shared across instances.

```go
slice_copy := my_slice
// Update value (in both). 
slice_copy[0] = 100
// true
fmt.Println(my_slice[0] = slice_copy[0]
```

You can append to a slice.

```go
slice3 := []int{1, 2, 3}

// Append one or more values. Update in place.
slice3 := append(slice3, 4, 5)

// Extend the slice with another slice.
slice3 := append(slice3, []int{6, 7, 8})

fmt.Println(slice)
// [1, 2, 3, 4, 5, 6, 7, 8]
```
