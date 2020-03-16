# C Programming

_C_ is a language which started in 1972. It is known for its high performance and low-level memory control, making it ideal for building on top of. 

## Resources

- [C (programming language)](https://en.wikipedia.org/wiki/C_(programming_language)) on Wikipedia.
    - > C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, while a static type system prevents unintended operations
- [What is C Programming Language? Basics, Introduction and History](https://www.guru99.com/c-programming-language.html)
- [C language introduction](https://www.geeksforgeeks.org/c-language-set-1-introduction/)

## Implementation

Most programming language you come across such as Bash, Python or Java will be implemented in _C_.

For example, the commonly used version of Python known as CPython and can be found on here Github as ([python/cpython](https://github.com/python/cpython)). That is Python implemented in _C_. You will see many files there written in _C_ with `.c` or `.h` extensions. When you run Python code or import a builtin library, you might be running compiled _C_ code directory or you might be running _Python_ code which internally runs _C_ code. Running _C_ directly is typically mich faster, as running Python code requires interpretation and compilation at runtime.

There are alternatives such as Jython implemented in Java and IronPython implemented in C#.

## Help

Get help on the GNU C Compiler

```
$ man cc
$ info cc
$ cc --help
```
