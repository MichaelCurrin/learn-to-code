# Data types - primitives

Inspired by [Learn X in Y](https://learnxinyminutes.com/docs/go/).


Note: Unlike Java or C, the type comes _after_ the variable name.


## Numeric

```go
var x int
// Reassign
x = 0

// Unsigned int.
var u uint = 7

// Inferred type. The var keyword is not needed.
y := 1
```

```go
var my_float float32 = 0.1
var my_float2 = float64
my_float2 := 1.234
my_float3 := 1.
```


### Strings

```go
str = "My string"
raw_str = `My raw
string`

unicode_utf8_str = 'Σ'
```

## Size of numeric tpyes

Copied from: [tutorial](https://www.digitalocean.com/community/tutorials/understanding-data-types-in-go).

Go has the following architecture-independent unsigned and signed integer types:

Type        | Range
---         | ---
uint8       | 0 to 255
uint16      | 0 to 65535
uint32      | 0 to 4294967295
uint64      | 0 to 18446744073709551615
int8        | -128 to 127
int16       | -32768 to 32767
int32       | -2147483648 to 2147483647
int64       | -9223372036854775808 to 9223372036854775807

Floats and complex numbers also come in varying sizes:

Type       | Description
---        | ---
float32    | IEEE-754 32-bit floating-point numbers
float64    | IEEE-754 64-bit floating-point numbers
complex64  | Complex numbers with float32 real and imaginary parts
complex128 | Complex numbers with float64 real and imaginary parts

There are also a couple of alias number types, which assign useful names to specific data types:

Type       | Description
---        | ---
byte       | alias for uint8
rune       | alias for int32
