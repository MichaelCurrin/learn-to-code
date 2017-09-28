# PHP Readme


## Tutorial source


The files in this php directory are based on PHP tutorials at [w3schools.com](https://www.w3schools.com/PhP/default.asp).


## Start a PHP server

Python's simple HTTP server is not configured by default to run PHP. However, one can use php's webserver.

Install PHP (from [how to install LAMP on Ubuntu](http://howtoubuntu.org/how-to-install-lamp-on-ubuntu#install-php))

```bash
$ # Install
$ sudo apt-get install php
$ # Check
$ php -r 'echo "\n\nYour PHP installation is working fine.\n\n\n";'
```


Start PHP webserver.

```bash
$ cd learn-web-development/php/
$ php -S 127.0.0.1:8000
```

See more details here - [how to run PHP with simple http server](https://serverfault.com/questions/338394/how-to-run-php-with-simplehttpserver) or [python simple http server with php](https://stackoverflow.com/questions/12235876/python-simplehttpserver-with-php).


Go to http://localhost:8000 in your webrowser. You'see see the server is running and should default to the index page.

You can try view `/README.md` but it will probably download the file rather than show it in the browser.

There is a way to set autoindex but seems to require installing something.
