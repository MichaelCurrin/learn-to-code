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

- Official Rust site - https://www.rust-lang.org/
- [Installation](https://www.rust-lang.org/tools/install) doc.
- Releases
    - The latest release is announced on their homepage with a linked blog post e.g. https://blog.rust-lang.org/2020/12/31/Rust-1.49.0.html
    - [RELEASES.md](https://github.com/rust-lang/rust/blob/master/RELEASES.md) doc on GitHub.
    - [Releases](https://github.com/rust-lang/rust/releases) tab on the Rust repo.
- Rustup
    - [Rustup](https://rustup.rs/) homepage
    - [Repo](https://github.com/rust-lang/rustup)
- Learn Rust - https://www.rust-lang.org/learn
    - You get forwarded here from the https://doc.rust-lang.org homepage but subpaths on the docs below work
- Rust reference docs
    - Rust by Example - https://doc.rust-lang.org/stable/rust-by-example/
    - Online book "The Rust Programming Language" - https://doc.rust-lang.org/book/
- Packages registry: https://crates.io/
- Cheatsheets
    - [cheats.rs](https://cheats.rs/#cargo)
    - Surprisingly not on DevHints yet.
- Tutorials
    - [What the fork is Rust?](https://illustrated.dev/wtfrust) illustrated intro to Rust on [illustrated.dev](https://illustrated.dev).
    - [Getting Started](https://www.rust-lang.org/learn/get-started) guide on Rust site
    - [Learn Rust in Y Minutes](https://learnxinyminutes.com/docs/rust/)
    - [Rust Beyond the Basics](https://medium.com/learning-rust/rust-beyond-the-basics-4fc697e3bf4f) - vectors, structs, enums, generics, impls and traits.
    - Medium.com - [Rust Basics](https://medium.com/learning-rust/rust-basics-e73304ab35c7) - this was used in writing this tutorial.
    - [Working with strings in Rust](https://fasterthanli.me/blog/2020/working-with-strings-in-rust)
 - Courses
    - LinkedIn Learning - [First Look at Rust](https://www.linkedin.com/learning/first-look-rust) - this was used in writing this tutorial.
    - [Write Your First Program in Rust](https://egghead.io/courses/write-your-first-program-with-the-rust-language) on EggHead
- Run Rust online
    - [Rust Playground](https://play.rust-lang.org/) on official site
    - [Repl](https://repl.it/languages/rust)
    - [Tutorials Point](https://www.tutorialspoint.com/compile_rust_online.php)
- Rosetta code - https://rosettacode.org/wiki/Category:Rust
- Exercism track - https://exercism.io/tracks/rust
    - For getting assistance from real people
    - Or for mentoring others
- Blog posts - Rust is much loved (by 86% of developers) but only 3% currently use it.
    - [Post-Mozilla Rust: The Future of the Rust Language](https://medium.com/the-innovation/post-mozilla-rust-the-future-of-the-rust-language-61a5cfb1f615)
    - [What is Rust and why is it so popular?](https://stackoverflow.blog/2020/01/20/what-is-rust-and-why-is-it-so-popular/)
- Rust and WebAssembly
    - Run Python in the browser using Rust and WebAssembly
       - https://rustpython.github.io/demo/
    - Book -  https://rustwasm.github.io/docs/book/
        > Rust 🦀 and WebAssembly 🕸
        >
        > This small book describes how to use Rust and WebAssembly together.
    - WASM on Rust website https://www.rust-lang.org/what/wasm
    - Compiling from Rust to WebAssembly - https://developer.mozilla.org/en-US/docs/WebAssembly/Rust_to_wasm
- Rust vs Go
    - [This Week in Programming: Rust Versus Go? Why Not Both!](https://thenewstack.io/this-week-in-programming-rust-versus-go-why-not-both/)
        > Go vs Rust discussions are ridiculous. It should be more like: When to use Go. When to use Rust. When to use X...
    - [Why Go and not Rust?](https://kristoff.it/blog/why-go-and-not-rust/)


## Installation

From the [Install](https://www.rust-lang.org/tools/install) doc:

- Unix (macOS and Linux)
    ```sh
    $ curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
    $ # Previously the guide just said this:
    $ curl https://sh.rustup.rs -sSf | sh
    ```
- Windows
    - Download the `.exe` installer on the doc.

If you like, you can download save the install script yourself by going to [sh.rustup.rs/](https://sh.rustup.rs/) or view the source on GitHub at [rustup-init.sh](https://github.com/rust-lang/rustup/blob/master/rustup-init.sh).

That will install the following commands and add them to Cargo's bin so you can execute them from anywhere.

- `rustup`
- `cargo`
- `rustc`

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
