// Object.keys is used here for node 6 because Object.entries was not available.

const sites = {
    a: 'abc',
    b: 'def'
};

// This is functional programming style but not so readable.
var pagesList = Object.keys(sites).reduce(function(arr, domain) {
    arr.push({
        domain: domain,
        url: sites[domain]
    });
    return arr;
}, []);
console.log(pagesList);

// Iterate over keys and then lookup value using keys.
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
