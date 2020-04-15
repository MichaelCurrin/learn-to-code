/*
 * Printing
 */

fn main() {
    let greeting = "Hello";
    let name = "world";

    // Print using println! - it is a macro and not a function, as indicated by the '!'.
    println!("Hello");

    // Its first argument must be a string literal otherwise it will give an error.
    // println!(name);
    // error: format argument must be a string literal

    // String substitution.
    println!("{}", greeting);
    println!("{}, {}!", greeting, name);
    println!("{0}, {1}!", greeting, name);
    println!("{what}, {who}!", what=greeting, who=name);

    // Array printing.
    let numbers = [1, 2, 3];
    println!("{:?}", numbers);
    // Pretty pretty across multiple lines.
    println!("{:#?}", numbers);

    // Use the format! macro to store a formatted string.
    let a = format!("{}, {}!", greeting, name);
    println!("{}", a);
}
