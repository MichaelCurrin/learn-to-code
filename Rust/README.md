# Rust

Sources for this tutorial:

- Medium.com - [Rust Basics](https://medium.com/learning-rust/rust-basics-e73304ab35c7)
- LinkedIn Learning - [First Look at Rust](https://www.linkedin.com/learning/first-look-rust)

See also:

- Official [Rust reference docs](https://doc.rust-lang.org/reference/introduction.html)
- [Learn Rust in X Minutes](https://learnxinyminutes.com/docs/rust/)
- [Rust Beyond the Basics](https://medium.com/learning-rust/rust-beyond-the-basics-4fc697e3bf4f) - vectors, structs, enums, generics, impls and traits.


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

Check your Rustc version

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
$ # Unix. No extension.
$ ./file
```

```
> # Windows
> file.exe
```

Or, compile and run in one line.

```bash
$ rustc file.rs && ./file
```
