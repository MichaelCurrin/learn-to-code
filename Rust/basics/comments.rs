/*
 * Comments
 */

// Line comment.

/* Blockcomment */

/*
    Multiline
    block
    comment
 */


/*
    Comments can be nested.
 */

// // Nested single

/*
    /*
        Nested
        multi-line
    */
*/


// Document code using Markdown annotations and use `cargo doc` to generate HTML documentation.

// When using a mod block, use /// outside the block.
// Use //! inside the block when writing crate and module documentation.

// Examples:

/// My annotation
mod a {
    // ...
}


mod b {
    //! My annotation

    //
}


/*
    Attributes
    See https://doc.rust-lang.org/reference/attributes.html
    Below are doc attributes and data attribute equivalents.
*/

/// Foo
#[doc="Foo"]
fn a() {
}


fn b() {
    //! Foo
    #![doc="Foo"]
}


fn main() {
}
