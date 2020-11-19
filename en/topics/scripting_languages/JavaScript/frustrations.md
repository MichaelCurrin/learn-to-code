# Frustrations
> Things that bother me about JavaScript


## Disclaimer

Note this is an opinion piece, based on my experiences and knowledge. You don't have to agree with me.

Also this is not just about me - many others also dislike JS or parts of JS. It was famously written in 9 (or 10) days and some things about early JS or early Node stuck and were hard to undo (hence tools like Deno coming out).

This is a way of storing my thoughts so when I decide to user language as a long term tool or I decide to create a repo in a language, I have this as a reminder of my JS frustrations.


## Intro

I like what JS can do. I don't know how it does it and the things I have to do to get what I want. Yes I get more productive with JS as I learn its quicks, but there is still friction which makes it often frustrating or not intuitive to work with.

My comments mostly compare to what I see as the easy of working with Python in contrast to JS. I have worked with JS on the frontend and backend for a few years and with a bunch of frameworks and CI flows.

I have also worked with a couple of programming languages (Rust, Ruby, Go, Java). So when I say that something is weird is JS and "normal" or "straightforward" in Python, I also have the context of our other languages do something.

Onto my list.


## Builds

- JS projects typically minify output to smaller files that are less readable. This makes sense for browser usage but is not a thing that server-side languages like Python care about.
- JS projects typically also concatenate scripts. This makes sense for frontend projects when you want to combine 100 JS scripts (internal for downloaded from NPM) into a single JS script that is correctly scoped. But again this is not something that a Python dev has to worry about.
- There are also many ways to do these tasks. Using Bundle, Webpack and many others. I even made a repo covering each of these. An article I read on the topic pointed out the frustrations the author had with learning the ins and outs of each there being not standard, so I am not alone here.


## Packages

- It is common to have a project with about 10 direct dependencies on NPM and after your install them you have `node_modules` directory of 1000 folders. This can make installs slow and cause issues with conflicts or higher chance of vulnerabilities or packages not maintained. There was even an issue where a small JS package disappeared off of NPM at a thousands of websites failed to work properly.


## The language and standard lib

- Firstly, JavaScript is not a language. ECMAScript is the language and JavaScript is a standard, kind of. It's complicated. Each browser type e.g. Chrome, will use a certain version. And older browser versions will never support certain JS. This means that you have to use a tool like Babel to compile your modern JS to older code.
- Modern JS in the last few years has added some useful things, but some where in Python for early on. For example, use the spread operator `[... myArray]` compared with `*args` in Python (both for functions and unpacking). Similarly JS supports merging of dictionaries like this `{ 'foo': 'bar', x }` where `x` is a dict. In Python you do `'foo': 'bar', **x}`.
- Imports are confusing. `require('foo')` and `import * as foo from 'foo'` and `import {foo } from 'foo'` are all similar and mostly the same.
- Exports are confusing. In Python, everything is public and can be imported (you don't even need `__init__.py` anymore generally for modules). In JS you need to do one of the following, which I have only gotten my head around recently but not completely:
    ```javascript
    export function foo() {}

    function bar() {}

    export bar
    // OR
    exports.bar = bar
    // OR
    module.exports = { bar: bar}
    ```
- JS has this "fat arrow" syntax. And this okay for anonymous functions but it becomes used excessively.
    ```javascript
    function foo () { return 'bar' }
    // This is a function too but declared as a variable.
    const foo = () => 'bar'
    ```
- JS doesn't have classes. Yes `class` syntax was added recently but it is just nice syntax to build an `Object` type.
- JS, like PHP and Java, has confusing objects. These are similar but different in JS.
    - `Number`, `number` (also there is no `float` and `int`, just `number`)
    - `String`, `string`
    - `Object`, `object`
        - Also there is no array or hash type. Just object.
            ```javascript
            > typeof []
            'object'
            > typeof {}
            'object'
            >
            ```
        - Object is a mix between an array and a hash and class as understood in another languages.
            ```javascript
            > var y = []
            > y.bar = 'b'
            > y.bar
            // 'bar
            > y.bazz = () => console.log('hello')
            > y.bazz()
            hello
        - There is also a `Map` type which is more like an array but I've not had to use it.
- There are frequently functions that I use in Python that are not available in JS unless you install a package (further bloating node packages) or write your own function. See also my [JS wat](wat.md) page - I cover how there is no `sum` function in JS.

## Undefined

JS has an `undefined` type in addition to `null`. I don't know of any other languages that do that.

This can be annoying and unexpected to discover for the first time that this is valid:
```javascript
function foo (bar) {
    console.log(bar)
}
foo()
// undefined
```

As with Ruby, if you get an attribute that doesn't exist, you don't get an error.

```javascript
var x = {}
var y = x.bazz
console.log(y)
// undefined.
```

Also the way to check a type is not using the type but the name of the type as string.

See example. Note `typeof('undefined')` is valid too but my IDE converts to the style without brackets.

```javascript
> y === typeof 'undefined'
true
```

In Python, you get an error on a missing attribute or dictionary key, but you can use a default such as `None` or `0`.

```python
>>> x = {}
>>> y = x.get('bazz', None)
>>> y is None
True
```


And typeof is a function and works like `typeof(value)` but it is generally used as `typeof value`.


## Async

There are least 3 ways to do async logic. The language develops to handle newer ones but you still have to be comfortable using all 3 as each project has its own preference, or mixes between then.

You'll see async tasks especially when doing web requests, so the script waits for a response before continuing.

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

See more details in [Async](async.md) page.
