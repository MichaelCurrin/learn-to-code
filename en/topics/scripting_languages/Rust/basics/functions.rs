/*
    Functions

    A Rust script must have a `main` function otherwise it will give an error.

    When using arguments, you must declare data types.

    Returning
        By default functions return empty tuple `()`.
        If you want to return a value, return type must be specified after `->`.
        Returning is implied for the last statement in a function, without `return` keyword.
        The `return` keyword can be used to return sooner or to have multiple return points
        depending on the flow.
 */


fn hello() {
    println!("Hello, world!");
}


fn print_sum(a: i8, b: i8) {
    println!("Sum: {}", a + b);
}


fn add_one(a: i8) -> i8 {
    // This should not have a semicolon otherwise it will cause an error.
    a + 1
}


fn add_two(a: i8) -> i8 {
    // Using keyword and semicolon.
    return a + 2;
}


/// Use function as an argument.
fn apply_function(add_func: fn(i8) -> i8, a: i8) -> i8 {
    add_func(a)
}


fn main() {
    let a = add_one(10);
    let b = add_two(10);
    println!("{}", a);
    println!("{}", b);

    // Assign and use function pointer.
    let c = add_one;
    let d = c(10);
    // Specifying type.
    let c: fn(i8) -> i8 = add_one;

    let e = apply_function(add_one, 10);
}
