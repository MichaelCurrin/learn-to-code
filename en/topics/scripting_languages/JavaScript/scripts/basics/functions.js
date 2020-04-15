/**
 * Function Basics
 */

function noArguments() {
    console.log('No arguments taken');
}

function oneArgument(x) {
    console.log(x);
    return x + 5;
}

function multipleArgument(x, y) {
    console.log(x);
    console.log(y);
    return x * y;
}


function defaultArgument(x, y = 100) {
    console.log(x);
    console.log(y);
    return x * y;
}

function returnSomething(x) {
    return x + 1
}


/**
 * Demo of standard functions vs arrow functions in modern JS.
 */


function foo(x) {
    // Do something before returning.
    // ...
    return x + 1;
}


// Arrow functions (aka lambda).
// Single argument. Brackets around initial (x) are optional.
var bar = x => x + 1;
// Multiple arguments.
var baz = (x, y) => x + y;

console.log(foo(5));
console.log(bar(5));
console.log(baz(5, 6));
