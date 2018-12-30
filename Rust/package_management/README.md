# Package Management
> Quickstart guide to using Cargo in Rust.

Cargo is a package manager and can compile using `rustc`.

```bash
$ cargo -V
cargo 1.32.0-beta (1b6702f22 2018-12-06)
```

The commands in the section below were done from within the [package_management](package_management) directory, if you want to see the result.


## Create

Create a new package, which is a git repo with an ignore file. The implied default `--bin` option is to create a _binary_ package with a hello world binary executable.

```bash
$ cargo new my_package
     Created binary (application) `my_package` package
$ cd my_package
```

Structure of the new `my_package` directory:

```
.git
src/main.rs
Cargo.toml
.gitignore
```

(After creating the directory, I deleted the `.git` directory in this case since this is part of a larger repo.)

The `.gitignore` excludes the `target` directory (used for output) and `*.rs.bk` files.


## Build

Use check.

```bash
$ # Check a local package and all of its dependencies for errors
$ cargo check
   Compiling my_package v0.1.0 (.../my_package)
    Finished dev [unoptimized + debuginfo] target(s) in 0.25s
```

Otherwise build.

```bash
$ # Compile a local package and all of its dependencies
$ cargo build
   Compiling my_package v0.1.0 (.../my_package)
    Finished dev [unoptimized + debuginfo] target(s) in 0.04s
```

To see the `rustc` command (and the arguments it gets from your `*.toml` file), clear the output directory and build from scratch, but with the verbose argument.

```bash
$ rm -rf target
$ cargo build --verbose
Compiling my_package v0.1.0 (.../my_package)
     Running `rustc --edition=2018 --crate-name my_package src/main.rs ... ...`
    Finished dev [unoptimized + debuginfo] target(s) in 0.68s
```


## Run

Build and run.

```bash
$ cargo run
   Compiling my_package v0.1.0 (.../my_package)
    Finished dev [unoptimized + debuginfo] target(s) in 3.63s
     Running `target/debug/my_package`
Hello, world!
```
