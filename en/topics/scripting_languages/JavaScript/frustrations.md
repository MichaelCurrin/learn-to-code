# Frustrations
> Quirks that bother me about JavaScript


## Disclaimer

Note this is an opinion piece, based on my experiences and knowledge.
Also this is not just about me - many others also dislike JS or parts of JS. JS was famously written in 9 (or 10) days and some things about early JS or early Node stuck and were hard to undo (hence tools like Deno coming out).

This is a way of storing my thoughts so when I decide to user language as a long term tool or I decide to create a repo in a language, I have this as a reminder of my JS frustrations.


## Intro

I like what JS can do. I don't know how it does it and the things I have to do to get what I want. Yes I get more productive with JS as I learn its quirks, but there is still friction which makes it often frustrating or not intuitive to work with. It has surpises, many choices and things that are stable or don't exist in other languages change regularly.

My comments mostly compare to what I see as the easy of working with Python in contrast to JS. I have worked with JS on the frontend and backend for a few years and with a bunch of frameworks and CI flows.

I have also worked with a couple of programming languages (Rust, Ruby, Go, Java). So when I say that something is weird is JS and "normal" or "straightforward" in Python, I also have the context of our other languages do something.

Onto my list.


## Builds

- JS projects typically minify output to smaller files that are less readable. This makes sense for browser usage but is not a thing that server-side languages like Python care about.
- JS projects typically also concatenate scripts. This makes sense for frontend projects when you want to combine 100 JS scripts (internal for downloaded from NPM) into a single JS script that is correctly scoped. But then you have one large script, so the newer approach is to bundle and then split into chunks, so these can be loaded separately and only the parts that are needed on a page are loaded. MBut again this is not something that a Python dev has to worry about.
- There are also many ways to do these tasks. Using libraries like Bundle, Webpack, Rollup, Snowpack and many others. I even made a repo covering some of these. An article I read on the topic pointed out the frustrations the author had with learning the ins and outs of each there being not standard, so I am not alone here.


## Packages

- It is common to have a project with about 10 direct dependencies on NPM and after your install them you have `node_modules` directory of 1000 folders. This can make installs slow and cause issues with conflicts or higher chance of vulnerabilities or packages not maintained. There was even an issue where a small JS package disappeared off of NPM at a thousands of websites failed to work properly.


## The language and standard lib

- Firstly, JavaScript is not a language. ECMAScript is the language and JavaScript is a standard, kind of. It's complicated. Each browser type e.g. Chrome, will use a certain version. And older browser versions will never support certain JS. This means that you have to use a tool like Babel to compile your modern JS to older code.
- Modern JS in the last few years has added some useful things, but some where in Python for early on. For example, use the spread operator `[... myArray]` compared with `*args` in Python (both for functions and unpacking). Similarly JS supports merging of dictionaries like this `{ 'foo': 'bar', x }` where `x` is a dict. In Python you do `{'foo': 'bar', **x}`.
- Imports are confusing. `require('foo')` and `import * as foo from 'foo'` and `import { foo } from 'foo'` are all similar and mostly the same.
- **Exports** are confusing. In Python, everything is public and can be imported (you don't even need `__init__.py` anymore generally for modules). In JS you need to use either the older `require` syntax or the newer `import` syntax. Neither work in the browser without extra work. Here are several ways to do an export in the newer syntax.
    ```javascript
    // Export directly.
    export function foo() {}

    // Or export later.
    function bar() {}

    // Using.
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
- JS, like PHP and Java, has confusing objects. These are similar but different in JS. For example, Vue uses the titlecase one for components and TypeScript uses the lowercase one.
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
- Aliases
    - What makes using NPM annoying is that there are many ways to do things and therefore the instructions people use also diverge making things inconsistent and harder to follow. Sometimes it helps with a typo, sometimes it is a different word.
    - e.g. aliases for
        - `npm install` - `i, isntall, add`. Note in yarn, `install` and `add` cannot be used interchangeably anymore.
        - `npm update` - `up, upgrade, udpate`


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

And this how you check if a value is undefined as a variable of key-value pair. The first doesn't look like function but is actually preferred.

```javascript
> y === typeof 'undefined'
true
> y === typeof('undefined')
true
```

Note using brackets is valid too, but my IDE converts to the preferred style without brackets (which is also weird for a function call).

In Python, you get an error on a missing attribute or dictionary key, but you can use a default such as `None` or `0`.

```python
>>> x = {}
>>> y = x.get('bazz', None)
>>> y is None
True
```

Note the style of checking a variable in Python using `is None` instead of `typeof 'undefined'`.

More info on type checking - in Python you also have `type(x) is str` or for more robustness `isinstance(x, str)`.


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

The last case used to only work inside an `async` function - but with an update it can now be used at the top-level.

See more details in [Async](async.md) page.


## Servers

Python has this to start a web server. It is builtin.

```sh
$ python3 -m http.server
```

For JS, you have to write a file to add to the project and using the builtin `http` module. Or install and use one of many packages. See my [gist](https://gist.github.com/MichaelCurrin/1a6116a4e0918c8468dc7e1a701a5f95).


## Fetching

There are many ways to do a web request in JS.

The old way was to use `XMLHttpRequest`.

From [Ajax](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX/Getting_Started) tutorial.

```javascript
if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+ ...
    httpRequest = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 6 and older
    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}
```

The newer builtin way is using the [fetch](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API) function.

```javascript
fetch(url)
```

Though, you need a polyfill like [node-fetch](https://www.npmjs.com/package/node-fetch) NPM package so you can use it in Node.

Or you use an HTTP library like:

- [request](https://www.npmjs.com/package/request) (deprecated as of 2020)
- jquery
    ```javascript
    jQuery.ajax(url)
    ```
- [axios](https://www.npmjs.com/package/axios)
- [got](https://www.npmjs.com/package/got)
- [needle](https://github.com/tomas/needle)
- [SuperAgent](https://github.com/visionmedia/superagent)

Tutorials which compare approaches

- [The Top Node.js HTTP Libraries in 2020](https://blog.bearer.sh/top-node-request-libraries/)
- [7 Ways to Make HTTP Requests in Node.js](https://attacomsian.com/blog/http-requests-in-nodejs)


## Well-known frustrations

Some issues are so widely spread in JS that they become phrases.

- "callback hell"
- "promise hell" (you escaped callback hell and now have to deal with promise hell until you use `async` syntax)
- "dependency hell" (not exclusive to JS, but prominent because of the large and complex dependecy trees, partly due to the standard lib which is kept light so the Node team can focus on security)
- "framework fatigue"
