/*
    List data structures
    
    Tuple
        Fixed size list of elements of different types.

    Array
        Fixed size list of elements of the same type.

    Vector
        Dynamic sized list of elements of the same type.
        https://doc.rust-lang.org/stable/std/vec/
 */


fn tuples() {
    let x = (1, 1.5, true, "Hello");
    // Show first element.
    println!("{}", x.0);

    // Define with types.
    let y: (u8, f32, bool, &str) = (1, 1.5, true, "Hello");
    // Get value. Must be in index range to prevent error.
    let z = y.2;
    // Unpack values.
    let (a, b, c, d) = y;
    println!("a = {} b = {}", a, b);
}


fn arrays() {
    let a = [1, 2, 3];
    let b = [1, 2, 3];

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


fn main() {
    tuples();
    arrays();
}
