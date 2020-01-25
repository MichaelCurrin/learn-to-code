# Rust

## What is Rust?

> Rust combines low-level control over performance with high-level convenience and safety guarantees. It achieves these goals without requiring a garbage collector or runtime, making it possible to use Rust libraries as a "drop-in replacement" for C.

Rust uses a new paradigm of memory management - variables are owned by one process (can be changed by it and read-only by others), but other processes can "borrow" a variable. 

Rust is compiled language - it creates a binary executable. 

Types are checked at compile time. Types must be specified in the code inputs and outputs, but can be inferred for variables in functions allowing lighter code that doesn't need types specified everywhere. Rust allows a null type, but requires at compile time that you handle the null case - this avoids errors where you code tries to perform actions on a null object.

Variables in Rust are immutable by default.


## Why Rust?

- Performance
    > Rust is blazingly fast and memory-efficient: with no runtime or garbage collector, it can power performance-critical services, run on embedded devices, and easily integrate with other languages.
- Reliability
    > Rust’s rich type system and ownership model guarantee memory-safety and thread-safety — and enable you to eliminate many classes of bugs at compile-time.
- Productivity
    > Rust has great documentation, a friendly compiler with useful error messages, and top-notch tooling — an integrated package manager and build tool, smart multi-editor support with auto-completion and type inspections, an auto-formatter, and more.
    
Source: [link](https://www.rust-lang.org/)


## Resources

- Official [Rust site](https://www.rust-lang.org/)
- [Rust reference docs](https://doc.rust-lang.org/reference/introduction.html)
- Tutorials
    - [Getting Started](https://www.rust-lang.org/learn/get-started) guide on Rust site
    - [Learn Rust in Y Minutes](https://learnxinyminutes.com/docs/rust/)
    - [Rust Beyond the Basics](https://medium.com/learning-rust/rust-beyond-the-basics-4fc697e3bf4f) - vectors, structs, enums, generics, impls and traits.
    - Medium.com - [Rust Basics](https://medium.com/learning-rust/rust-basics-e73304ab35c7) - this was used in writing this tutorial.
    - LinkedIn Learning - [First Look at Rust](https://www.linkedin.com/learning/first-look-rust) - this was used in writing this tutorial.


## Installation

Install [Rustup](https://rustup.rs/) - the Rust toolchain manager.

```
# Unix
$ curl https://sh.rustup.rs -sSf | sh
```

Rustup allows switching between and updating stable, beta or nightly compilers.

On installation it will add the `cargo`, `rustc`, `rustup` and other commands to Cargo's bin.


To uninstall:

```bash
$ rustup self uninstall
```


### Cargo

Rust programs and Cargo plugins can be installed to Cargo's bin directory with `cargo install`.

The directory includes standard tools and will be added to your `.profile` and `.bash_profile` files on installation. On Unix this path is `$HOME/.cargo/bin` and Windows is `%USERPROFILE%\.cargo\bin`.

Check you Cargo version:

```bash
$ cargo -V
cargo 1.32.0-beta (1b6702f22 2018-12-06)
```


### Rustc

Check your _Rustc_ version

```bash
$ rustc -V
rustc 1.31.1 (b6c32da9b 2018-12-18)
```


## Usage


### Cargo

See the [Rust packagment_management doc](package_management/README.md) for how to use Cargo.


### Rustup

```bash
$ rustup update
```

### Rustc

Compile.

```bash
$ rustc file.rs
```

Execute the binary output file.

```bash
$ # On Unix. No extension.
$ ./file
```

```
> # On Windows
> file.exe
```

Or, compile and run in one line.

```bash
$ rustc file.rs && ./file
```
