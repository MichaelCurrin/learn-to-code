// Object.keys is used here for node 6 because Object.entries was not available.

const sites = {
    a: 'abc',
    b: 'def'
};

// Using `in` for associative array gives keys.
for(let key in sites) {
    let value = sites[key];
    console.log(key, value);
}
// a abc
// b def


// This is functional programming style but not so readable.
var pagesList = Object.keys(sites)
    .reduce(function(arr, domain) {
        arr.push({
            domain: domain,
            url: sites[domain]
        });
        return arr;
    }, []);
console.log(pagesList);

// Iterate over keys and then lookup value using keys. Note that forEach does not return like map does.
var pagesList = [];
Object.keys(sites).forEach(function(domain) {
    let value = sites[domain];
    let page = {
        domain: domain,
        url: value
    };
    pagesList.push(page);
});
console.log(pagesList);

// Similar to above but using for loop rather than forEach.
var pagesList = [];
for (const domain of Object.keys(sites)) {
    let value = sites[domain];
    let page = {
        domain: domain,
        url: value
    };
    pagesList.push(page);
}
console.log(pagesList);

// Unpack key-value pairs from an associative array.
const obj = { a: 5, b: 7, c: 9 };
for (const [ key, value ] of Object.entries(obj)) {
    console.log(`${key} ${value}`); // "a 5", "b 7", "c 9"
}


// Get values and indexes of an array.
console.log( ['a','b','c'].map((x, y) => [x, y]) )
// [ [ 'a', 0 ], [ 'b', 1 ], [ 'c', 2 ] ]


// Unpack associative array (hash) as keys and values.
var myHash = { a: 10, b: 200 };

Object.entries(myHash))
// [ [ 'a', 10 ], [ 'b', 200 ] ]

> Object.entries(myHash).map((x) => `${x[0]}=${x[1]}`)
[ 'a=10', 'b=200' ]

// Note that entries gives an array of pairs, so if you try and use two parameters in the map function you'll get the index rather than split key and value.
// Therefore using 0 and 1 indexing is easiest.

