# Clojure

## Resources 

[Homepage](https://clojure.org/)

Install - see [Getting Started](https://clojure.org/guides/getting_started

Online playground https://repl.it/languages/clojure

For an intro, see Uncle Bob's [A Little Clojure](https://blog.cleancoder.com/uncle-bob/2020/04/06/ALittleClojure.html) post.

And [A Little More Clojure](https://blog.cleancoder.com/uncle-bob/2020/04/09/ALittleMoreClojure.html).


## About

Clojure is a Functional Programming.

Shift the first bracket one character left and you understand function calls.

In other languages.

```
f(1, 2)
```

In Clojure:

```cj
(f 1 2)
```

The first item in a list is the function to apply.


## Operations

This will do `1 + 2`.

```cj
=> (+ 1 2)
3
```

These are functions that you use at the start of a list.

```cj
=> (+ 1 2 3 4)
10
=> (- 5 6 7 8)
-16
=> (* 6 7 8)
336
=> (/ 5 6 9)
5/54
=> (/ 3)
1/3
```


## Data structures 

Both lists and vectors can change size.

### Lists

A list is implemented as a link-listed, making it fast for insertions but slow to get item N. Good for stacks.

> Each element contains a value and points to the next element. That makes it very fast to add an element to the front of the list, or to walk the list one element at a time. But it makes it slow to index into the list to find the Nth element.

```cj
(1 2 3)
```

In the REPL, you avoid a error, you need to explicitly define a list.

```cj
=> (quote (1 2))
(1 2)
=> '(1 2)
(1 2)
=> (list 1 2)
(1 2)
```

### Vectors

A vector is implemented as a resizable array. It is fast to add to the end of the array and to index it (and get an item anywhere at a given index). Good for queues.

```cj
[1 2 3]
```


## Functions 

### Call

Get the first time in a list.

```cj
=> (first 1 2 3)
1
```


### Define

This takes on parameter `x` and calculates the result as `3x + 1`.

```cj
(defn f [x]
    (+ (* 3 x) 1))
```

Create a sum function.

The hard way:

```cj
(defn sum [l]
    (if (empty? l) 0 
        (+ (first l) (sum (rest l))))
)
```

Use the `apply` function to call `+`.

```cj
(defn sum [l] (apply + l))
```

```cj
(defn sum [l] (reduce + l))
```

```cj
=> (sum [1 2 3 4 5])
15
```

Create a factorial function.

```cj
(defn fac [x] (if (= x 1) 1 (* x (fac (dec x)))))
```

```cj
=> (fac 3)
6
=> (fac 4)
24
=> (fac 10)
3628800
```
