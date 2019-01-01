/*
    Primitive data types

    integer
    float
    boolean
    character
 */


fn booleans() {
    let x = true;
    let y: bool = false;
}


fn numeric() {
    /* Signed integers (positive or negative) */

    // Rust refaults to signed 32-bit because "it’s generally the fastest, even on 64-bit systems."
    // This is i32.
    let a = 10;

    // Fixed size - 8, 16, 32 or 64 bit.
    // e.g. 8 bit has range -128 to 127.
    let a: i8 = 10;

    let b: i32 = -1000;

    // Variable size. Min and max are equivalent to that of 64-bit.
    let c: isize = 222;


    /* Unsigned integers - positive only */

    let a: u8 = 10;
    let b: u32 = 1000;

    // Variable size. Min and max are equivalent to that of 64-bit.
    let c: usize = 222;


    /* Floats - postive or negative */

    // 32 and 64 bit
    // "The default type is f64 because on modern CPUs it’s roughly the same speed as f32 but is capable of more precision."

    // Single precision float. Avoid using this unless you really need to reduce memory or
    // do low-level optimization.
    let d = 123.4;
    let d: f32 = 123.4;

    // Double precision float.
    let e: f64 = 123.4;


    /* Check min and max */

    println!("i8 min {}", i8::min_value());
    println!("i8 max {}", i8::max_value());

    /*
    Unsigned integer rangers
        i8 min -128
        i8 max 127
        i16 min -32768
        i16 max 32767
        i32 min -2147483648
        i32 max 2147483647
        i64 min -9223372036854775808
        i64 max 9223372036854775807

    Signed integer rangers
        u8 min 0
        u8 max 255
        u16 min 0
        u16 max 65535
        u32 min 0
        u32 max 4294967295
        u64 min 0
        u64 max 18446744073709551615
    */
}


fn strings() {
    // char - note single quotes.
    let plain_char = 'x';
    let unicode_char = '😎';

    let typed_char: char = 'y';

    // String.
    let plain_string = "Hello";

    let typed_string: &str = "Hello";
}


fn main() {
    booleans();
    strings();
    numeric();
}
