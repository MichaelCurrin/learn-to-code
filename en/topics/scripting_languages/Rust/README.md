# Rust


## What is Rust?

> Rust combines low-level control over performance with high-level convenience and safety guarantees. It achieves these goals without requiring a garbage collector or runtime, making it possible to use Rust libraries as a "drop-in replacement" for C.

Rust uses a new paradigm of memory management - variables are owned by one process (can be changed by it and read-only by others), but other processes can "borrow" a variable.

Rust is compiled language - it creates a binary executable.

Types are checked at compile time. Types must be specified in the code inputs and outputs, but can be inferred for variables in functions allowing lighter code that doesn't need types specified everywhere. Rust allows a null type, but requires at compile time that you handle the null case - this avoids errors where you code tries to perform actions on a null object.


## Features

- Highly performant
    - As performant as C in most-cases.
    - Great for parallel and high-computation intense tasks.
- Rust variables are statically typed and checked at compile time. e.g. A variable can be declare as a 32-bit integer.
- Rust does not have a null value - this avoids the error of performing a method on a variable which is `None` or `null`, such as in Python or Javascript.
- Variables in Rust are immutable by default.
- An immutable variable (including a structure) means that a pointer cannot be reassigned and also the contents cannot be changed (unlike `const` keyword in JavaScript which only takes care of the former).
- A variable can be declared mutable.
- Memory management is a new paradigm.
    - Variables can have only one owner at a time (a process which can mutate it).
    - Another process can borrow the variable, so the original loses the ability to mutate it.
    - A variable can also be moved to another process.


## Why Rust?

- Performance
    > Rust is blazingly fast and memory-efficient: with no runtime or garbage collector, it can power performance-critical services, run on embedded devices, and easily integrate with other languages.
- Reliability
    > Rust’s rich type system and ownership model guarantee memory-safety and thread-safety — and enable you to eliminate many classes of bugs at compile-time.
- Productivity
    > Rust has great documentation, a friendly compiler with useful error messages, and top-notch tooling — an integrated package manager and build tool, smart multi-editor support with auto-completion and type inspections, an auto-formatter, and more.

Source: [link](https://www.rust-lang.org/)


## How to learn Rust

There are 3 main ways: according to the [Learn Rust](https://www.rust-lang.org/learn) page of the Rust site

- [Read the book](https://doc.rust-lang.org/book/)
- [Do the Rustlings course](https://github.com/rust-lang/rustlings/)
- [Check out Rust by Example](https://doc.rust-lang.org/stable/rust-by-example/)


## Resources

See [Rust](https://michaelcurrin.github.io/dev-resources/resources/ruby/) in Dev Resources.


## Installation

Follow the [Install Rust](https://gist.github.com/MichaelCurrin/6b619f1b035b922f4d883265b2ffcdcf) guide.

See below for more details.


## Rust tools

### Rustup

Install is Rust toolchain manager.

Rustup allows switching between and updating stable, beta or nightly compilers.

### Cargo

Rust programs and Cargo plugins can be installed to Cargo's bin directory with `cargo install`.

The directory includes standard tools and will be added to your `.profile` and `.bash_profile` files on installation. On Unix this path is `$HOME/.cargo/bin` and Windows is `%USERPROFILE%\.cargo\bin`.

Check you Cargo version:

```sh
$ cargo -V
cargo 1.32.0-beta (1b6702f22 2018-12-06)
```

### Rustc

From [What is Rustc?](https://doc.rust-lang.org/rustc/what-is-rustc.html):

> rustc is the compiler for the Rust programming language, provided by the project itself. Compilers take your source code and produce binary code, either as a library or executable.

Check your _Rustc_ version.

```sh
$ rustc -V
rustc 1.31.1 (b6c32da9b 2018-12-18)
```


## Uninstall

```sh
$ rustup self uninstall
```


## Usage

### Cargo

For how to use Cargo, see the [Rust packagment management doc](package_management/README.md) in this project.

### Rustup

```sh
$ rustup update
```

### Rustc

Compile.

```sh
$ rustc file.rs
```

Execute the binary output file.

```sh
$ # On Unix.
$ ./file
```

```console
> # On Windows.
> file.exe
```

Or compile and run - in one line.

```sh
$ # On Unix.
$ rustc file.rs && ./file
```


## Examples

- [Rust by Example](https://doc.rust-lang.org/rust-by-example/) on the docs.
    - Learn Rust with examples (live code editor included). This site runs on the GitHub repo [rust-lang/rust-by-example](https://github.com/rust-lang/rust-by-example).
- [Fibonacci sequence](https://gist.github.com/mjs/d5770f0b0f440eb67687100929f1335a) as a gist.
- [Rust examples](https://github.com/eliovir/rust-examples) repo on GitHub.
