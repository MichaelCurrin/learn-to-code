/**
 * Arrays are sorted alphabetically by their string values not numeric values.
 *
 * https://stackoverflow.com/questions/1063007/how-to-sort-an-array-of-integers-correctly
 *
 */

var x = [ 40, 5, 100 ];
x.sort();
console.log(x);
// => [ 100, 40, 5 ]

x.sort((a, b) => a - b);
console.log(x);
// => [ 5, 40, 100 ]
