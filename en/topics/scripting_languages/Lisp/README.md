# Lisp

LISP is an acronym for "LISt Processing Language"

> ...so named because the list is one of the primary data structures in the language. Symbolic AI regards symbolic lists as being a key part of the way intelligent beings and systems actually store and manipulate information. [source](http://www.math-cs.gordon.edu/courses/cps323/LISP/lisp.html)

- [Lisp (programming language)](https://en.wikipedia.org/wiki/Lisp_(programming_language)) on Wikipedia.
    > Lisp (historically LISP) is a family of programming languages with a long history and a distinctive, fully parenthesized prefix notation.
    > 
    > Originally specified in 1958, Lisp is the second-oldest high-level programming language in widespread use today. 
    > 
    > Only Fortran is older, by one year.
    > 
    > Lisp has changed since its early days, and many dialects have existed over its history. 
    > 
    > Today, the best-known general-purpose Lisp dialects are Racket, Common Lisp, Scheme and Clojure.

See also the [Clojure](../Clojure/) language section.


## Basics

### Symbols

```lisp
word
this-is-a-symbol
*this-is-also-a-symbol*
123so-is-this
```

### Numbers

```lisp
42
3.14
6.02e23
```

### Lists

```lisp
(1 2 3)
(a b c)
```

```lisp
(a list)
(a list (that contains another list))
((small prime numbers) (2 3 5 7))
```


An empty list is one of:

```
()
nil
```

Mixed types:

```
(1 2 3), (), nil)
```

  
## Evaluation

```lisp
(+ (* 2 3) (* 4 5)))
```

Or

```lisp
(+ (* 2 3)
   (* 4 5)))
```

i.e.

```
2*3 + 4*5
```

