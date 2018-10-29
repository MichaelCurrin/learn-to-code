/**
 * Demo of map, filter and reduce methods.
 */

console.log('Base data');

var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
console.log(numbers);


console.log('\nSimple use');

var multiple = numbers.map(x => x*2);
console.log(multiple);

var big = numbers.filter(x => x > 5);
console.log(big);

// Adds current number to accumulated sum at each step.
var total = numbers.reduce((x, y) => x + y);
console.log(total);

// Alternatively, supply arrow function by name.
const add = (x, y) => x + y
var total = numbers.reduce(add);
console.log(total);

console.log('\nChaining');

//Note order of map and filter matters.
var mapFilter = numbers.map(x => x*2).filter(x => x > 5);
console.log(mapFilter);

var mapReduce = numbers.map(x => x*2).reduce((x, y) => x + y)
console.log(mapReduce);
