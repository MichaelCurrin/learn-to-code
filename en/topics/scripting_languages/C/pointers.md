# Pointers

See [pointers](https://www.guru99.com/c-pointers.html) tutorial.


## Reference

You can print the reference for a variable using `&`. This is used in Rust and Go too.

This reference will be a random number.

```c
int a = 1;
printf("%d", &a);
// -480613588
```


## Pointer

Declare a pointer using a data type and an asterisk. The letter `p` is commonly used.

```c
int *p;
void *q;
```

Here, `b` is assigned to point to the location of `a`. We initialize and assign in one line.

```c
int a = 1;
int *b = &a;
```

The asterisk also serves to deference a pointer that already exists.

```c
a = 2;
printf("%d %d", b, *b);
// 2 123456789
```
