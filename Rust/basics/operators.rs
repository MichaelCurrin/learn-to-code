/*
 * Operators
 */

fn arithmetic() {
    let a = 2 + 1;
    let b = a + 1;
    let c = b * 3;

    // Floor division.
    let d = 100 / 9;

    let e = 100.0 / 9.0;

    let f = 100 % 3;

    // + is also used for array and string concatenation.
}


fn comparisons() {
    let a = 1;
    let b = 2;

    let c = a == b;
    let d = a != b;

    let e = a > b;
    let f = a < b;

    let g = a >= b;
    let h = a <= b;

    let i = true > false;
    let j = 'a' > 'A';
}


fn logic() {
    let a = true;
    let b = false;

    // NOT
    let c = !a;

    // AND
    let d = a && b;

    // OR
    let e = a || b;
}


fn bits() {
    // Inversions on integer types
    let a = !-2; // 1
    let b = !-1; // 0
    let c = !0; // -1
    let d = !1; // -2

    let a = 1;
    let b = 2;

    let c = a & b; // 0  (01 && 10 -> 00)
    let d = a | b; // 3  (01 || 10 -> 11)
    let e = a ^ b; // 3  (01 != 10 -> 11)
    let f = a << b; // 4 (1*2*2 or in bits 001 => 010 => 100)
    let g = a >> b; // 0 (1/2/2 => 0)
    let h = 8 << 2; // 2 (8 / 2 / 2 => 2)
}


fn compound_assignment() {
    let mut a = 2;

    a += 5; // i.e. a = a + 5;
    a -= 5;
    a *= 5;
    a /= 5;
    a &= 5;

    a &= 5;
    a |= 5;
    a ^= 5;
    a << 5;
    a >> 5;
}


fn type_casting() {
    let a = 15;
    // Cast integer as float.
    let b = (a as f64) / 2.0; // 7.5
}

/*
    Borrow variable
        `&`
        `&mut`
    Deference variable
        `*`
*/

fn main() {
    arithmetic();
    comparisons();
    logic();
    bits();
    compound_assignment();
    type_casting();
}
