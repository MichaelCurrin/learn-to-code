const myArray = ['a', 'b', 'c', 'd', 'e'];

// This is actually a for loop and will return undefined. Use log here to see each element.
myArray.forEach(el => console.log(el))
console.log();

// This will return a map.
var myMap = myArray.map(el => el + '!');
console.log(myMap);

console.log('\n=========================\n');


const someMap = {
    a: 'somestring',
    b: 42,
    c: false
};

// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values
console.log(Object.values(someMap));
console.log();

console.log(Object.keys(someMap));
console.log();


Object.keys(someMap).forEach(function (k) {
    console.log(k + ': ' + someMap[k]);
});
console.log();


for (const [key, value] of Object.entries(someMap)) {
    console.log(`${key} ${value}`);
}
console.log('\n=========================\n');



/*
Using JQuery

const $ = require('jquery');
var anotherMap = $.map(foo, function(item, key) {
    return {key: item};
});
console.log(output);

var keys = $.map(foo, function(item, key) {
    return key
});
console.log(keys);
console.log('\n=========================\n');

*/


const data = {
    a: {
        z: 100
    },
    b: {
        y: 50,
        x: 10
    }
};
// Get keys of 2nd level and sort them.
var secondLevel = Object.values(data)
var secondLevelKeys = secondLevel.map(el => Object.keys(el));
var flattenedKeys = [].concat.apply([], secondLevelKeys);
var sortedKeys = flattenedKeys.sort();
console.log(sortedKeys);
