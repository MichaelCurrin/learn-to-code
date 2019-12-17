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

var pagesList = [];
Object.keys(sites).forEach(function(domain) {
    let page = {
        domain: domain,
        url: sites[domain]
    };
    pagesList.push(page);
});
console.log(pagesList);

var pagesList = [];
for (const domain of Object.keys(sites)) {
    let page = {
        domain: domain,
        url: sites[domain]
    };
    pagesList.push(page);
}
console.log(pagesList);

const obj = { a: 5, b: 7, c: 9 };
for (const [ key, value ] of Object.entries(obj)) {
    console.log(`${key} ${value}`); // "a 5", "b 7", "c 9"
}
