# NodeJS
> Server-side JavaScript

This guide covers how to install NodeJS and run NodeJS.

## About

NodeJS is a way of running JavaScript on the server rather than in the browser. This allows you do things like simple scripts in the command-line, automation tools, games and web servers which communicate with a database.

- [NodeJS](https://en.wikipedia.org/wiki/Node.js) page on Wikipedia.
    > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
- Repository: [nodejs/node](github.com/nodejs/node)
- Initial release: 2009


## Install

Install NodeJS for your operating system using a package manager. 

_Note this will install both NodeJS and [NPM (Node Package Manager)](node_packages.md#npm)._

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

## Check version

Check what version was installed.

```sh
$ node --version
```

Example output:
```
13.1.0
```

## Run
> How to run NodeJS code

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

Use `node` command and the path to a script. 

For example, create a script.

```sh
$ echo 'console.log("Hello!");' > hello.js
```

Then run it:

```sh
$ node hello.js
```

### Run script with Node implied

Create a similar script to above, but using `#!/usr/bin/env node` at the start and with executable permissions.

```sh
$ echo '#!/usr/bin/env node\nconsole.log("Hello!");' > hello_executable.js
$ chmod +x hello_executable.js
```

Then run it:

```
./hello_executable.js
```


### Run script with NPM

You can run arbitrary code using `npm`. If you add a `package.json` file in your project (typical for Node projects), then you can add items to the `"scripts"` section. These can be any shell command, such as using Bash, Node or NPM to do a task.


Then run them from the command line using one of the approaches below.

Using [run-script](https://docs.npmjs.com/cli/run-script).

```sh
# List available commands.
$ npm run
```

```sh
$ npm run COMMAND

# Longer form
$ npm run-script COMMAND
```

Using [npm-run](https://www.npmjs.com/package/npm-run)

```sh
$ npm-run COMMAND
```


For example:

`package.json`

```json
{
    "scripts": {
        "foo": "echo Foo!",
        "start": "node server",
        "build": "echo 'Building site' && echo 'Done!'"
    }
}
```

```sh
$ npm run foo
$ npm run start
$ npm run build
```

#### Special commands


NPM also supports this a special commands that doesn't need `run`.

```sh
$ npm start
```

If you don't configure `start`, then the command above will run this for you:

```sh
npm node server.js
```

See [Default values](https://docs.npmjs.com/misc/scripts#default-values) for NPM scripts.


### Run a package's executable script

A less common approach is to run an NPM package without going through NPM and using a file in the `.bin` directory. This may not be supported for all packages.

For example, after running `npm install`, this script could have been added to `.bin` with executable permissions.

`node_modules/.bin/hello`

```node
#!/usr/bin/env node
console.log("Hello, world!");
```

This can then be run as:

```sh
$ node_modules/.bin/hello`
```
```
Hello, world!
```

The bin script is an entry point and might be short, with most of the package contents installed here:

```
node_modules/
    hello/
        bin/
        src/
        # ...
        README.md
        # ...
```
