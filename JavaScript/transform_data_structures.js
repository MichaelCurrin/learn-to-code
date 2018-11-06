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
[ [ 'X', [ 'Value A', 'Value B' ] ],
  [ 'Y', [ 'Value C', 'Value D' ] ] ]
*/

b = a.map(function (x, y) {
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
