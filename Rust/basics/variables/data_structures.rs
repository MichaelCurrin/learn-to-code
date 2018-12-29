/*
    Data structures

    Array
        Fixed size list of elements of the same type.

    Vector
        Dynamic sized list of elements of the same type.
        https://doc.rust-lang.org/stable/std/vec/

    Tuple
        Fixed size list of elements of different types.
 */


fn arrays() {
    let a = [1, 2, 3];
    let mut b = [1, 2, 3];

    // Show whole list. The second one is pretty printed.
    println!("{:?}", a);
    println!("{:#?}", a);
    // Show first element.
    println!("{}", a[0]);


    // Provide type an number of elements.
    let c: [i32; 3] = [1, 2, 3];

    // Empty.
    let d: [i32; 0];
    let e: [i32; 0] = [];
}


fn tuples() {
    let a = (1, 1.5, true, "Hello");
    // Show first element.
    println!("{}", a.0);
}


fn main() {
    arrays();
    tuples();
}
