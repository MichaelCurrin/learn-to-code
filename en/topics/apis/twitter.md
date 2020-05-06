# Twitter API

See [Twitter libraries](https://developer.twitter.com/en/docs/developer-utilities/twitter-libraries) recommended by Twitter, across programming languages.

Some quickstart snippets are shown below.


## Python

See my [Twitter Python Guide](https://michaelcurrin.github.io/python-twitter-guide/) which focuses on the Tweepy library. It covers other Python libraries too - see the Resources page.


## JavaScript

Using [twitter](https://www.npmjs.com/package/twitter) on NPM packages.

Example:

```javascript
var Twitter = require('twitter');

// Replace with your dev account secrets. And keep them secret and not in version control!
var KEYS = {
    consumer_key: '',
    consumer_secret: '',
    access_token_key: '',
    access_token_secret: '',
}

var client = new Twitter(KEYS);

var params = {
    screen_name: 'michaelcurrin'
};

client.get('users/show', params, function (error, tweets, response) {
    if (!error) {
        console.log(tweets);
    }
});
```
