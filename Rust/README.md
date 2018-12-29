# Rust

Sources:

- [Rust Basics](https://medium.com/learning-rust/rust-basics-e73304ab35c7)


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
rustup self uninstall
```


### Cargo

Rust programs and Cargo plugins can be installed to Cargo's bin directory with `cargo install`.

The directory includes standard tools and will be added to your `.profile` and `.bash_profile` files on installation.

On Unix this path is `$HOME/.cargo/bin` and Windows is `%USERPROFILE%\.cargo\bin`.


Commands

```bash
$ cargo update
$ cargo build
$ cargo run
$ cargo test
$ cargo doc
```

Create a new crate at a given path.

```bash
$ # Create binary. (Default)
$ cargo new PATH # --bin

$ # Create library.
$ cargo new PATH --lib
```


### Rustc

Check your version:

```bash
$ rustc --version # or -V
rustc 1.31.1 (b6c32da9b 2018-12-18)
```


## Usage


### Rust

Compile

```bash
$ rustc file.rs
```

Execute the binary output file

```bash
$ # Unix. No extension.
$ ./file
```

```
> # Windows
> file.exe
```

Compile and run

```bash
$ rusc file.rs && ./file
```
