# Clojure

## Resources 

- [Homepage](https://clojure.org/)
- [Overview](https://clojure.org/about/rationale) - "Why Clojure?" rationale, info on Lisp and info on Functional Programming. 
- Install - see [Getting Started](https://clojure.org/guides/getting_started)
- Online playground https://repl.it/languages/clojure
- Reference
    - [Learn - syntax](https://clojure.org/guides/learn/syntax)
    - Starting language syntax and data types https://clojure.org/reference/reader
- REPL and main https://clojure.org/reference/reader

For an intro, see Uncle Bob's [A Little Clojure](https://blog.cleancoder.com/uncle-bob/2020/04/06/ALittleClojure.html) post.

And [A Little More Clojure](https://blog.cleancoder.com/uncle-bob/2020/04/09/ALittleMoreClojure.html).


## About

Clojure is a Functional Programming. It encourages immutable data and no side effects, but it also allows mutable data and imports from Java when needed. It is dynamic but also compiles functions and has type hints and checks.

Clojure aims to innovate and standardize more than the standard Lisps (Common Lisp and Scheme), plus adds concurrency and not restricted by backwards compatibility.

To get an overview of Clojure.

Shift the first bracket one character left and you understand function calls.

In other languages:

```
f(1, 2)          # Some function f taking two params
sum(1, 2, 3, 4)  # Some function sum taking an iterable or list.
```

In Clojure:

```clj
(f 1 2)
(+ 1 2 3 4)
```

The first item in a list is the function to apply.

Functions are first-class objects that you can pass them around.


## Operations

This will do `1 + 2`.

```clj
=> (+ 1 2)
3
```

These are functions that you use at the start of a list.

```clj
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

```clj
(1 2 3)
```

In the REPL, you avoid a error, you need to explicitly define a list.

```clj
=> (quote (1 2))
(1 2)
=> '(1 2)
(1 2)
=> (list 1 2)
(1 2)
```

### Vectors

A vector is implemented as a resizable array. It is fast to add to the end of the array and to index it (and get an item anywhere at a given index). Good for queues.

```clj
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

```clj
(defn f [x]
    (+ (* 3 x) 1))
```

Create a sum function.

Note you don't need one if you use:

```clj
(+ 1 2 3)
```

The hard way:

```clj
(defn sum [l]
    (if (empty? l) 0 
        (+ (first l) (sum (rest l))))
)
```

Use the `apply` function to call `+`.

```clj
(defn sum [l] (apply + l))
```

```clj
(defn sum [l] (reduce + l))
```

```clj
=> (sum [1 2 3 4 5])
15
```

Create a factorial function.

```clj
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


## Run

### Start interactive move

No arguments for the REPL.

```sh
$ clj
Clojure 1.10.0
=>
```

### Execute script 

```sh
$ clj -M hello.clj
```

Pass arguments.

```sh
$ clj -M hello.clj arg1 arg2 arg3
```

The arguments will be provided to your program as a seq of strings bound to the var `*command-line-args*`:

```clj
*command-line-args* => ("arg1" "arg2" "arg3")
```

