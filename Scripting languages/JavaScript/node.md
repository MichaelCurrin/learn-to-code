# NodeJS
> Server-side JavaScript

NodeJS is a way of running JavaScript on the server rather than in the browser. This allows you do things like simple scripts in the command-line, automation tools, games and web servers which communicate with a database.

- [NodeJS](https://en.wikipedia.org/wiki/Node.js) page on Wikipedia.
    > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
- Repository: [nodejs/node](github.com/nodejs/node)
- Initial release: 2009

This section covers how to install and run NodeJS.

## Install

### Linux

```sh
$ sudo apt install nodejs
```

### macOS

```sh
$ brew install nodejs
```

### Windows

Download and run the Windows installer from the [Download](https://nodejs.org/en/download/) page.


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


### Run script with Node

Use `node` command and the path to a script. For example:

```sh
echo "console.log('Hello!');" > filename.js
```

```sh
$ node filename.js
```

You can also add a shebang to the script and make it executable, though that is not a common pattern.


### Run with NPM

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
