# Variables

Rust is statically typed (it checks data type at compile time using specified or inferred types).

A variable cannot change type. Types occur after a colon. They are not required for variable bindings and can help set a different value for what the compiler would assume. Types but are for const and static though.

There is no null or undefined in Rust.

Unlike in C, you cannot get a null pointer exception.


## Variable bindings

Rust has variable bindings - an association between a variable name and a value. They declared with the `let` keyword.

Variables are immutable by default but can be made mutable with the `mut` keyword. 

See https://doc.rust-lang.org/rust-by-example/variable_bindings.html


## Constants

In addition to variable bindings which are left immutable, we also have constants which come in two forms. The `const` or `static` keyword is used instead of `let`.

See https://doc.rust-lang.org/rust-by-example/custom_types/constants.html


### `const`

- Dynamic memory address
- An unchangeable value (the common case).

### `static`

- Fixed memory address. There is only one instance of it.
- A possibly mutable variable with 'static lifetime. The static lifetime is inferred and does not have to be specified. Accessing or modifying a mutable static variable is unsafe.
- Statics are usually set at the top of the file as global variables.
