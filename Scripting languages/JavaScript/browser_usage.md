# Running JS in the browser

## Resources

- [JavaScript and HTML DOM Reference](https://www.w3schools.com/jsref/default.asp) on W3 Schools.
- [JS global](https://www.w3schools.com/jsref/jsref_obj_global.asp) function docs on W3 Schools.
- JS [Web APIs](https://developer.mozilla.org/en-US/docs/Web/API)  docs Mozilla. Covers to work with areas like DOM, Geolocation API, Push API and Fetch API.

## URL query strings

### Read URL

Window [location](https://developer.mozilla.org/en-US/docs/Web/API/Window/location)  docs.

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

```js
> window.location.search
// "?foo=bar"
```

### Parse query parameters

There is a builtin function `URLSearchParams` for parsing the values.

- [URLSearchParams](https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams) docs

Example:

```js
> var paramsString = "q=URLUtils.searchParams&foo=bar";
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
> encodeURIComponent('?x=test');
// "%3Fx%3Dtest"
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
> decodeURIComponent('%3Fx%3Dtest');
"?x=test"
```

There is also `decodeURIComponent` which is for use on an entire URL, not just a component.
<!--stackedit_data:
eyJoaXN0b3J5IjpbMTk0MjIxMTAxM119
-->