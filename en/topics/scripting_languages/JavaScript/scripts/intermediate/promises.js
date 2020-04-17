/** Promises */

/**
 * Promises.all()
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/all
 *
 * The Promise.all(iterable) method returns a single Promise that resolves when all of the promises
 * in the iterable argument have resolved or when the iterable argument contains no promises. It
 * rejects with the reason of the first promise that rejects.
 */

var promise1 = Promise.resolve(3);
var promise2 = 42;
var promise3 = new Promise(function(resolve, reject) {
    setTimeout(resolve, 100, 'foo');
});

Promise.all([ promise1, promise2, promise3 ]).then(function(values) {
    console.log(values);
});
// expected output: Array [3, 42, "foo"]

// Take to arrays such as lists retrieved from two endpoints, then combine them into single array.
var a = Promise.resolve([ 10, 20, 30 ]);
var b = Promise.resolve([ 5, 15, 40 ]);
Promise.all([ a, b ]).then(function(values) {
    var flat = [].concat.apply([], values);
    flat.sort((a, b) => a - b);
    console.log(flat);
});
