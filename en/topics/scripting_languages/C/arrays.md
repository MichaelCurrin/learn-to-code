# Arrays 

An array is a **fixed length** collection of elements. There is no dynamic length array builtin into C but you can use `malloc` as per this [guide](https://www.cprogrammingbasics.com/dynamic-array-in-c/).

See [C Arrays](https://www.tutorialspoint.com/cprogramming/c_arrays.htm) tutorial.


## Syntax

```
type arrayName [ arraySize ];
```


## Examples

Array of 10 items all with null values.

```c
double balance[10];
// {0.0, 0.0, ... }
```

Array of 5 items. You can omit length as it can be inferred.

```c
double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0};
double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0};
```

Update the 5th element (the 1st element is at `0`).

```c
balance[4] = 50.0;
```

Declare a variable referencing a value in the array.

```c
double salary = balance[9];
```
