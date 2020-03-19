# NodeJS
> Server-side JavaScript

NodeJS is a way of running JavaScript on the server rather than in the browser. This allows you do things like simple scripts in the command-line, automation tools, games and web servers which communicate with a database.

- [NodeJS](https://en.wikipedia.org/wiki/Node.js) page on Wikipedia.
    > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
- Repository: [nodejs/node](github.com/nodejs/node)
- Initial release: 2009

This section covers how to install and run NodeJS.

## Install

**Linux**

```sh
$ sudo apt install nodejs
```

**macOS**

```sh
$ brew install nodejs
```

## Run

### Interactive console

Start the interactive console.
```sh
$ node
```
```
Welcome to Node.js v12.1.0.
Type ".help" for more information.
>
```

Enter commands and press enter.

For example:

```javascript
> console.log('Hello!');
```

Press `CTRL`+`D` to exit the console.


## Run project scripts

### Node

How to run scripts in this project using `node`.

```sh
$ cd <PATH_TO_REPO>
$ cd 'Scripting languages/JavaScript'
$ node my_file.js
$ # e.g.
$ node iteration.js
```

### NPM

How to run arbitrary package scripts using `npm`.

Using [run-script](https://docs.npmjs.com/cli/run-script).

```sh
$ npm run-script COMMAND
$ # Alias:
$ npm run COMMAND
```

Using [npm-run](https://www.npmjs.com/package/npm-run)

```sh
$ npm-run COMMAND
```

### NVM

Repo: [nvm-sh/nvm](https://github.com/nvm-sh/nvm)
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTE2NjI2ODU0NTNdfQ==
-->