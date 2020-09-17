# NodeJS
> Server-side JavaScript

This guide covers how to install and run NodeJS (aka "Node" or "Node.js").


## About

NodeJS is a way of running JavaScript on the _server_ rather than in the browser. 

Where it can run:

- Web (for desktop and mobile browsers)
- Mobile app (e.g. with React Native)
- Desktop app (e.g. with Proton Native or Electron)

### What can I build with Node?

Some things you could build:

- Simple scripts for use in the command-line
- Tooling (built, automation, linting, browser tests, web scrapers)
- Games
- Web servers (serve pages similar to Flask or PHP)
- Single-Page Applications (using server-side code to build a front-end app that could be served with a Node server or as static assets)
- APIs - REST API, web sockets and GraphQL APIs. Thesse could have a database behind them
- Shareable libraries
- IoT

### Backend and frontend

Often applications are built with JavaScript on both the backend (server-side) and frontend. This is an [isomorphic](https://medium.com/capital-one-tech/why-everyone-is-talking-about-isomorphic-universal-javascript-and-why-it-matters-38c07c87905) design. It can mean you don't have to switch languages when working on both and you only need an engineer who can do JavaScript. 

Still, JavaScript is not beginner-friendly like Ruby or Python and also those have been doing server-side tasks a lot longer. So just because you _can_ use JavaScript on your backend doesn't mean you should.

### What not to use Node for

Node is single-threaded and so it is great for concurrency and asynchronous tasks. But it is not great at CPU-bound tasks like reading files or machine learning. So Python is a much better alternative for machine learning, leveraging its multiprocessing support (processes across CPUs).


## Resources

- [NodeJS](https://en.wikipedia.org/wiki/Node.js) page on Wikipedia.
    > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
    - Initial release: 2009
- Repository: [nodejs/node](github.com/nodejs/node)
- Node docs
    - [Node docs](https://nodejs.org/en/docs/) - see 3 main sections, listed below.
        - [API](https://nodejs.org/api/)
        - [ES6 features](https://nodejs.org/en/docs/es6/) aka "ECMAScript 2015 (ES6) and beyond"
            > The ES6 section describes the three ES6 feature groups, and details which features are enabled by default in Node.js, alongside explanatory links. It also shows how to find which version of V8 shipped with a particular Node.js release.
        - [Guides](https://nodejs.org/en/docs/guides/)
            > The Guides section has long-form, in-depth articles about Node.js technical features and capabilities.
    - [Node API doc](https://nodejs.org/api/documentation.html). Also covers the standard lib.
- Tutorials
    - [Node.js](https://www.w3schools.com/nodejs/default.asp) on W3 Schools
    - [Node.js Built-in Modules](https://www.w3schools.com/nodejs/ref_modules.asp) on W3 schools.
- Courses
    - [Intro to Node.js](https://frontendmasters.com/courses/node-js/) on Frontend Masters.


## Install

Install NodeJS using instructions in this [gist](https://gist.github.com/MichaelCurrin/aa1fc56419a355972b96bce23f3bccba).

See also [NPM (Node Package Manager)](node_packages.md#npm) guide.


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

Then enter a command and and press <kbd>Enter</kbd>.

For example:

```javascript
> console.log('Hello!');
Hello!
```

Press <kbd>CTRL</kdb>+<kbd>D</kbd> to exit the console.


### Run a script with Node

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

```sh
$ ./hello_executable.js
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


## Builtin modules

How to use the standard lib - builtin packages.

Note: Unfortunately, according a Node.js course I watched, Node.js has a **small/limited** standard library. This is intentional so that the maintainers can focus on core behavior and security and get out new releases faster, leaving the community to write custom libraries and iterate on those at their own pace. For example, Node.js and also browser JS has no `sum` function - you have to write your own or copy one off of the internet or install a library or use one that is within a larger library.

- [Node Built-in Modules](https://www.w3schools.com/nodejs/ref_modules.asp). 
    > Node.js has a set of built-in modules which you can use without any further installation.

See the full list above. Some are covered below.

### Assert module

- [W3 schools](https://www.w3schools.com/nodejs/ref_assert.asp).

```javascript
var assert = require('assert');
assert(5 > 7);
```

### File system module

- [Node docs](https://nodejs.org/api/fs.html)
- [W3 schools](https://www.w3schools.com/nodejs/ref_fs.asp).

```javascript
var fs = require('fs');

fs.readFile('demofile.txt', 'utf8', function(err, data) {
  if (err) throw err;
  console.log(data);
});
```

### Path module

- [Node docs](https://nodejs.org/api/path.html)
- [W3 schools](https://www.w3schools.com/nodejs/ref_path.asp)

```javascript
var path = require('path');
var filename = path.basename('/Users/Refsnes/demo_path.js');
console.log(filename);
```
