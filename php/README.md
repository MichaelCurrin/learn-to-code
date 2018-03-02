# PHP Readme

The files in this php directory are mostly based on the [PHP tutorials](https://www.w3schools.com/PhP/default.asp) at [w3schools.com](https://www.w3schools.com).


## Installation and Usage

The aim is to see the project's PHP files as they are rendered in the browser and to compare that to the source files in another window.

1. Install PHP (from [how to install LAMP on Ubuntu](http://howtoubuntu.org/how-to-install-lamp-on-ubuntu#install-php))

    ```bash
    $ sudo apt-get install php
    $ php -r 'echo "\n\nYour PHP installation is working fine.\n\n\n";'
    ```

2. Start a PHP webserver.

    ```bash
    $ cd learn-to-code/php/
    $ php -S 127.0.0.1:8000
    ```

3. Open http://127.0.0.1:8000 in your web browser.
    - You will see the [index.html] page rendered.
    - Click on the link to view the result of PHP files which are in the [static] directory.
    - If you enter a bad URL you will get this error: _Not Found The requested resource /filename.ext was not found on this server._
    - If you enter the path in the browser as `/README.md`, the file will be downloaded rather than viewed.
    - There is a way to set autoindex to list the contents of the directory if there is not index page, but that seems to require installing something.

4. Check the server log

  - View the log of server requests, which is outputted in the terminal where the server is running. 
  - This is useful to see activity on the server and to debug and missing files or bad syntax within scripts. Here is some example output.

    ```
    [Fri Mar  2 19:27:49 2018] 127.0.0.1:33050 [200]: /

    [Fri Mar  2 19:27:49 2018] 127.0.0.1:33054 [404]: /favicon.ico - No such file or directory

    [Fri Mar  2 20:10:22 2018] PHP Parse error:  syntax error, ... in /path/to/file.php on line 11
    [Fri Mar  2 20:10:22 2018] 127.0.0.1:33554 [500]: /static/printing.php - syntax error, ... on line 11
    ```


## Further details

Python's simple HTTP server is not configured by default to run PHP. However, one can use php's webserver.

Resources:

- [How to run PHP with simple HTTP server](https://serverfault.com/questions/338394/how-to-run-php-with-simplehttpserver)
- [Python simple HTTP server with PHP](https://stackoverflow.com/questions/12235876/python-simplehttpserver-with-php)
