/*
    Variable bindings
 */


fn main() {
    // The let keyword is using in binding expressions.
    let a = true;
    // Without type inference.
    let a: bool = true;

    // We bind a variable to a pattern, which can be a set of variable or function names.
    let (x, y) = (1, 2);

    // mut keyword to make it mutable. Otherwise you will get error "cannot assign twice to immutable variable".
    let mut z = 100;
    z = 200;

    // Though you can assign over an immutable variable.
    let b = 1;
    let b = 2;
}
