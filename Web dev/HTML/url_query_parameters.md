# URL query parameters
> Also known as search parameters


## What are URL parameters?

URL parameters are a way of sending data to a webpage using the URL - typically when sending data when responding to a form or doing a search.

Example of URL parameters:

- `?foo=bar&fizz=buzz`

URL parameters follow a structure like this:

- Start with question mark.
- Use an equals sign to separate a key and value.
- Use an ampersand to separate pairs.
- Values should be percent-encoded. e.g. a space becomes `%20`.

Links

- [Query string](https://en.wikipedia.org/wiki/Query_string) on Wikipedia.

Note that you should **never** send sensitive data (e.g. credit card details) through a URL parameters as an end user or developer. As the parameters are not secure. Rather use POST request with data sent on the payload or use a third-party integration such as for payment details.
