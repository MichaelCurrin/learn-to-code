# API di Twitter 

## JavaScript

Guarda [twitter](https://www.npmjs.com/package/twitter) su NPM packages.

Esempio:

```javascript
var Twitter = require('twitter');

// Sostituisci con i segreti del tuo account di sviluppo. E tienili segreti e non sotto il controllo delle versioni!
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
