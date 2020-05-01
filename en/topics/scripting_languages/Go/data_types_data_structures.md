# Data types: Data structures

Based on [Learn X in Y](https://learnxinyminutes.com/docs/go/).

Note that is import is needed for the prints to work.

```
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

