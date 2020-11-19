# Async
> Callback functions, promises and async-await


## Summary

```javascript
// Callback.
foo('bar', function (bazz) {
  console.log(bazz.toUpperCase());
});

// Promises.
foo('bar')
  .then(function (bazz) {
    console.log(bazz.toUpperCase());
  });

// Async.
const bazz = await foo('bar')
console.log(bazz.toUpperCase());
```

Note the last case must be used inside an `async` function only.


## Callback function

```javascript
foo('bar', function (bazz) {
  console.log(bazz.toUpperCase());
});
```

This is the infamous "callback hell" where you have to nest function calls to chain them. This what the only way for a long time.

```javascript
foo('bar', function (bazz) {
  fizz(bazz, function(boo) {
  console.log(boo.toUpperCase());
  }
});
```

## Promise

Promises came later to JavaScript - they were actually in before, taken out and put back in again.

Often you'll use a call to package which handles a promise so you just to `.then()` to chain promises. Here using fat-arrow functions for readability.

```javascript
foo('bar')
  .then((resp) => resp.json())
  .then(data => console.log(data))
```

You can also create a promise using `new Promise()`.


## Async

See [async](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/async_function) in Mozilla docs.


Here we have `asyncCall` defined as an `async` function.

```javascript
function resolveAfter2Seconds() {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve('resolved');
    }, 2000);
  });
}

async function asyncCall() {
  console.log('calling');
  const result = await resolveAfter2Seconds();
  console.log(result);
  // expected output: "resolved"
}

asyncCall();
```

It uses `await` to call a function that returns a promise, so you don't have to use `.then()` chains. Here is another example showing how `await` approach reads much more naturally.

```javascript
async function foo() {
  // Two independent await statements.
  const result1 = await new Promise((resolve) => setTimeout(() => resolve('1')))
  const result2 = await new Promise((resolve) => setTimeout(() => resolve('2')))

  // Use result of one await call in another.
  const response = await fetch('/user.json');
  const user = await response.json();
}
foo()
```

Note `await` only works in functions (not in the main body, like in Python) and only if they have `async` keyword.

Example from [Async/await](https://javascript.info/async-await) on JavaScript Info.

```javascript
// Syntax error in top-level code
let response = await fetch('/article/promise-chaining/user.json');
let user = await response.json();
```

Placed inside an [IIFE](https://developer.mozilla.org/en-US/docs/Glossary/IIFE).

```javascript
(async () => {
  const response = await fetch('/article/promise-chaining/user.json');
  const user = await response.json();
  // ...
})();
```
