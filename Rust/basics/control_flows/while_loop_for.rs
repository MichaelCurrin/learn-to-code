/*
 * While, loop and for
 */

fn while_demo() {
    println!("WHILE\n");

    let mut a = 1;

    while a <= 10 {
        a += 1;
        println!("a: {}", a);
    }
    println!("Done\n");

    // Usage of break and continue.
    let mut b = 0;
    while b < 20 {
        b += 1;

        if b % 2 == 0 {
            continue
        }
        println!("Odd: {}", b);

        if b == 10 {
            break;
        }
    }
    println!("Done\n");

    // Nested logic.
    // Break by named while loop scope.
    let mut c1 = 1;
    'outer_while: while c1 < 6 {
        let mut c2 = 2;
        'inner_while: while c2 < 6 {
            println!("Current values: {} {}", c1, c2);
            if c1 == 2 && c2 == 2 {
                break 'outer_while;
            }
            c2 += 1;
        }
        c1 += 1;
    }
    println!("Done\n");
}


fn loop_demo() {
    println!("LOOP\n");

    // Using the following is equivalent to using `while true` and the compiler actually recommends the loop usage.
    let mut a = 1;
    loop {
        println!("Not yet");
        if a == 10 {
            break;
        }
        a += 1;
    }
    println!("Done\n");
}


fn for_demo() {
    println!("FOR\n");

    // Create range from START (inclusive) to END (exclusive). e.g. values 0 to 9 below.
    for a in 0..10 {
        println!("{}", a);
    }
    println!("Done\n");

    for b in 0..20 {
        if b % 2 == 0 {
            continue
        }
        println!("Odd: {}", b);

        if b == 10 {
            break;
        }
    }
    println!("Done\n");

    // Nested logic.
    'outer_for: for c1 in 0..10 {
        'inner_for: for c2 in 100..110 {
            println!("Values: {} {}", c1, c2);
            if c1 == 2 && c2 == 105 {
                break 'outer_for;
            }
        }
        // Note c2 is not in the outer scope so cannot be referenced here.
    }
    println!("Done\n");

    // Working with arrays or vectors.
    let group : [&str; 4] = ["A", "B", "C", "D"];

    // Iterate over index.
    for i in 0..group.len() {
        println!("{}", group[i])
    }
    println!("Done\n");

    // Iterate over items.
    for value in group.iter() {
        println!("{}", value)
    }
    println!("Done\n");
}


fn main() {
    while_demo();
    loop_demo();
    for_demo();
}
