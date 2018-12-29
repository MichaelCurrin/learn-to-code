# Variables

Rust is statically typed (it checks data type at compile time).

Types are not required for variable bindings but are for const and static. Types occur after a colon.


## Variable bindings

In Rust, variables are immutable by default so we call them variable bindings.

See https://doc.rust-lang.org/rust-by-example/variable_bindings.html


## Constants

See https://doc.rust-lang.org/rust-by-example/custom_types/constants.html


### `const`

- Dynamic memory address
- An unchangeable value (the common case).

### `static`

- Fixed memory address. There is only one instance of it.
- A possibly mutable variable with 'static lifetime. The static lifetime is inferred and does not have to be specified. Accessing or modifying a mutable static variable is unsafe.
- Statics are usually set at the top of the file as global variables.
