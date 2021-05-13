# Running JS in the browser


## Resources

- [JavaScript and HTML DOM Reference](https://www.w3schools.com/jsref/default.asp) on W3 Schools.
- [JS global](https://www.w3schools.com/jsref/jsref_obj_global.asp) function docs on W3 Schools.
- JS [Web APIs](https://developer.mozilla.org/en-US/docs/Web/API)  docs Mozilla. Covers to work with areas like DOM, Geolocation API, Push API and Fetch API.


## Run

1. Open a browser.
2. Right-click and click _Inspect_.
3. Open the _Console_ tab.
4. Enter command and press enter.


## Execute on body loaded

Various ways to execute JS only after the body is loaded.

If you run JS to soon, you can get an error that an element with a certain ID does not exist yet.

Run anonymous function using `window.onload`.

```html
<head>
    <script>
        window.onload = function () {
            var el = document.getElementById('foo');
            console.log(el.innerHTML)
        }
    </script>
</head>

<body>
    <p id="foo">Hello, world!</p>
</body>
```

Variation, using `addEventListener`.

```html
<head>
    <script>
        window.addEventListener('load', function () {
            var el = document.getElementById('foo');
            console.log(el.innerHTML);
        });
    </script>
</head>

<body>
    <p id="foo">Hello, world!</p>
</body>
```

Attach named function directly to body element event.

```html
<head>
    <script>
        function run() {
            var el = document.getElementById('foo');
            console.log(el.innerHTML);
        }
    </script>
</head>

<body onload="run()">
    <p id="foo">Hello, world!</p>
</body>
```

Place script after content in the body.

```html
<head>
</head>

<body onload="run()">
    <p id="foo">Hello, world!</p>

    <script>
        var el = document.getElementById('foo');
        console.log(el.innerHTML)
    </script>
</body>
```

If you want to keep the script in scope, then use an IIFE.


## URL query strings

### Read URL

See window [location](https://developer.mozilla.org/en-US/docs/Web/API/Window/location) docs for more details.

```js
> window.location
// Location "https://example.com/fizz?foo=bar"

> window.location.host
"example.com"

> window.location.hostname
"example.com"

> window.location.pathname
"/fizz"

> window.location.port
""
```

### Read query parameters

This property will give you query parameter string.

```js
> window.location.search
// "?foo=bar&fizz=123"
```

### Parse query parameters

How to lookup a value by key from the search params string.

There is a builtin class `URLSearchParams`. Note you need to use the `new` keyword.

- [URLSearchParams](https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams) docs.
- [Get URL parameters with JavaScript](https://www.sitepoint.com/get-url-parameters-with-javascript/) tutorial.


Example:

```js
> var paramsString = "?foo=bar&fizz=123";
> var searchParams = new URLSearchParams(paramsString);
>
> searchParams.get("foo");
// "bar"
```


### Encoding and decoding

The URL path and query parameters need to be percent-encoded to be valid in the URL. For example, a space is `'%20'`.

#### Encode

Encode to percent-encoded string.

- [encodeURIComponent](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/encodeURIComponent) docs

```js
> encodeURIComponent('Foo Bar');
// "Foo%20Bar"
```

There is also `encodeURI` which is for use on an entire URL, not just a component. This is useful as it will keep certain characters like `?` and `=` as plain text.

```js
> encodeURI('https://example.com/fizz?foo=Foo Bar');
"https://example.com/fizz?foo=Foo%20Bar"
```

#### Decode

Decode to plain string.

- [decodeURIComponent](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/decodeURIComponent) docs

```js
> decodeURIComponent('Foo%20Bar');
"Foo Bar"
```

There is also `decodeURIComponent` which is for use on an entire URL, not just a component.
