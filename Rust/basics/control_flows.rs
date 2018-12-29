/*
 * Control flows
 */

fn simple() {
    let a = 50;

    if a > 70 {
        println!("Big");
    } else if a < 30 {
        println!("Small");
    } else {
        println!("Medium");
    }
}


fn refactored() {
    let a = 50;
    // Define variable for conditional logic.
    let b;
    if a > 70 {
        b = "Big";
    } else if a < 30 {
        b = "Small";
    } else {
        b = "Medium";
    }
    println!("{}", b);
}

fn assign() {
    let a = 50;
    // Assign the value using multiple possible returns and one semicolon outside the logic.
    let b = if a > 70 {
        "Big" // Note no `;`
    } else if a < 30 {
        "Small"
    } else {
        "Medium"
    };
    println!("{}", b);
}


fn matching() {
    // Like switch in JavaScript or case in bash or SQL.

    let tshirt_width = 20;
    let tshirt_size = match tshirt_width {
        16 => "S", // EQUAL
        17 | 18 => "M", // OR
        19 ... 21 => "L", // In range 19 to 21
        22 => "XL",
        _ => "Not Available",
    };
    println!("{}", tshirt_size);


    // Note no _ for catchall as we've checked all conditions.
    let is_allowed = false;
    let list_type = match is_allowed {
        true => "Full",
        false => "Restricted"
    };
    println!("{}", list_type);


    let marks_paper_a: u8 = 25;
    let marks_paper_b: u8 = 30;
    let output = match (marks_paper_a, marks_paper_b) {
        (50, 50) => "Full marks for both papers",
        (50, _) => "Full marks for paper A",
        (_, 50) => "Full marks for paper B",
        (x, y) if x > 25 && y > 25 => "Good",
        (_, _) => "Work hard"
    };
    println!("{}", output);
}


fn main() {
    simple();
    refactored();
    assign();
    matching();
}
