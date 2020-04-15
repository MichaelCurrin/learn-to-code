/**
 * Transform data structures.
 *
 * Transform a dictionary of arrays to a list of dictionaries, going through output at steps
 * for clarity.
 */
var foo = {
    'X': [
        'Value A',
        'Value B',
    ],
    'Y': [
        'Value C',
        'Value D',
    ]
};

var a = Object.entries(foo);
/*
Unpack keys and values as pairs.

Get an array, where each contains element 0 as the key and element 1 as the value
(in this case, another array).

[ [ 'X', [ 'Value A', 'Value B' ] ],
  [ 'Y', [ 'Value C', 'Value D' ] ] ]
*/

var b = a.map(function (x, y) {
    return 'Row: ' + y + ' Data: ' + x
});
/*
[ 'Row: 0 Data: X,Value A,Value B',
  'Row: 1 Data: Y,Value C,Value D' ]
*/

var bar = Object.entries(foo).map(function (i) {
    return {
        domain: i[0],
        url: i[1],
    }
});
/*
[ { domain: 'X', url: [ 'Value A', 'Value B' ] },
  { domain: 'Y', url: [ 'Value C', 'Value D' ] } ]
*/

var baz = Object.entries(foo).map(function (i) {
    return i[1].map(function (url) {
        return {
            domain: i[0],
            url: url,
        }
    })
});
/*
[ [ { domain: 'X', url: 'Value A' },
    { domain: 'X', url: 'Value B' } ],
  [ { domain: 'Y', url: 'Value C' },
    { domain: 'Y', url: 'Value D' } ] ]
*/

// Flatten the above.
var foobar = [].concat.apply([], Object.entries(foo).map(function (i) {
    return [], i[1].map(function (url) {
        return {
            domain: i[0],
            url: url,
        }
    })
}));

console.log(foobar)
/*
[ { domain: 'X', url: 'Value A' },
  { domain: 'X', url: 'Value B' },
  { domain: 'Y', url: 'Value C' },
  { domain: 'Y', url: 'Value D' } ]
*/

console.log('\n-----\n');

/** Transform array to dictionary. **/

// Start with an empty dictionary, then add a value to it, then pass it to the next iteration
// using reduce.

// Convert array of dictionaries to dictionary.
// Based on this SO answer
//   https://stackoverflow.com/questions/26264956/convert-object-array-to-hash-map-indexed-by-an-attribute-value-of-the-object
var arr = [{
        k: 'foo',
        v: 'bar'
    },
    {
        k: 'hello',
        v: 'world'
    }
];
var result = arr.reduce(function (map, obj) {
    map[obj.k] = obj.v;
    return map;
}, {});

console.log(result);
// { foo: 'bar', hello: 'world' }

// Convert array of elements to dictionary, appying a conversion rule (which could be more complex).
const convert = i => `https://${i}.com`;
var arr = [
    'foo',
    'bar',
];
// Note that instead of using a object followed by a for loop to add to it, we have a single
// statement to create and fill the result variable. This is the functional programming approach.
var result = arr.reduce(function (map, el) {
    map[el] = convert(el);
    return map;
}, {});
console.log(result);
