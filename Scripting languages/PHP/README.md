# PHP

## What is PHP?

From the PHP [getting started](https://www.php.net/manual/en/intro-whatis.php) manual:

> PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

## 📚 Resources

- [PHP official site](https://www.php.net/)
- Libraries
    - [Composer](https://getcomposer.org/) - dependency manager
    - [Laravel](https://laravel.com/) - web framework
    - PHP CMS's
        - [WordPress.org](http://wordpress.org/)
        - [Moodle](https://moodle.org/) - [Wikipedia page](https://en.wikipedia.org/wiki/Moodle)
        - [Joomla](https://www.cloudways.com/blog/best-php-cms/#joomla)
        - [Drupal](https://www.cloudways.com/blog/best-php-cms/#drupal)
- Tutorials
    - [PHP tutorials](https://www.w3schools.com/PhP/default.asp) ([w3schools.com](https://www.w3schools.com))
    - [Solo Learn](https://www.sololearn.com/) - see their PHP course.
    - [Learn PHP in Y minutes](https://learnxinyminutes.com/docs/php/)
- Blog posts
    - [PHP in 2020](https://stitcher.io/blog/php-in-2020)
    - [Top 40 PHP Libraries of 2020 Every Developer Should Know](https://www.cloudways.com/blog/php-libraries/)
    - [Top 14 Best PHP CMS In Market For Developers in 2020](https://www.cloudways.com/blog/best-php-cms/) post)

## Sites built on PHP

- [WordPress.com](https://wordpress.com/) - hosting, built on free open-source WordPress.org tech.
- [Facebook.com](https://facebook.com)

See this Quora answer page for a longer list - [What are the top 10 websites built with PHP?](https://www.quora.com/What-are-the-top-10-websites-built-with-PHP).

## Installation

### Debian/Ubuntu

Install with `apt-get`. From [how to install LAMP on Ubuntu](http://howtoubuntu.org/how-to-install-lamp-on-ubuntu#install-php).

```bash
$ sudo apt-get install php
```

### macOS

Use brew to upgrade to PHP 7.3+. From [guide](https://stitcher.io/blog/php-73-upgrade-mac). See also extensions listed there.

```bash
$ brew upgrade php
```

Use curl and bash to install PHP 7.3 - from [guide](https://tecadmin.net/install-php-macos/).

```bash
$ curl -s http://php-osx.liip.ch/install.sh | bash -s 7.3
```

## Usage

The aim is to see the project's PHP files as they are rendered in the terminal or in the browser and to compare that to the source `.php` files in another window.

### Run terminal

Check version.

```bash
$ php --version
PHP 7.1.23 (cli) (built: Feb 22 2019 22:19:32) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
```

Pass string to PHP to execute.

```bash
$ php -r 'echo "\n\nYour PHP installation is working fine.\n\n\n";'
```

Run a script.

```bash
$ php path/to/file.php
```

Start an interactive console.

```bash
$ php -a
php > echo 'Hello!';
Hello!
php >
```

### Run in browser

#### PHP server

1. Start a PHP web server.

<!--TODO: Use public directory instead and look at how other sites separate index and public files e.g. 000webhost.com-->

```bash
$ cd learn-to-code/PHP/
$ php -S 127.0.0.1:8000
```

2. Open [127.0.0.1:8000](http://127.0.0.1:8000) in your web browser.
    - You will see the [index.html](index.html) page rendered.
    - Click on the links to view the result of PHP files which are in the [static](static) directory.
    - If you enter a bad URL you will get this error: _Not Found The requested resource /filename.ext was not found on this server._
    - If you enter the path in the browser as http://127.0.0.1:8000/README.md, the file will be downloaded rather than viewed.
    - There is a way to set _autoindex_ to list the contents of the directory if there is not index page, but that seems to require installing something.

3. Check the server log
  - View the log of server requests, which is outputted in the terminal where the server is running.
  - This is useful to see activity on the server and to debug and missing files or bad syntax within scripts. Here is some example output.

```
[Fri Mar  2 19:27:49 2018] 127.0.0.1:33050 [200]: /

[Fri Mar  2 19:27:49 2018] 127.0.0.1:33054 [404]: /favicon.ico - No such file or directory

[Fri Mar  2 20:10:22 2018] PHP Parse error:  syntax error, ... in /path/to/file.php on line 11
[Fri Mar  2 20:10:22 2018] 127.0.0.1:33554 [500]: /static/printing.php - syntax error, ... on line 11
```

## Other server

Python's simple HTTP server is not configured by default to run PHP script. However, one can use PHP's webserver.

See resources:

- [How to run PHP with simple HTTP server](https://serverfault.com/questions/338394/how-to-run-php-with-simplehttpserver)
- [Python simple HTTP server with PHP](https://stackoverflow.com/questions/12235876/python-simplehttpserver-with-php)
