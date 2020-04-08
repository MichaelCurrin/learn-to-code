# Twitter API

## JavaScript

See [twitter](https://www.npmjs.com/package/twitter) on NPM packages.

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
