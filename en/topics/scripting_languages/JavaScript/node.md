# NodeJS
> Server-side JavaScript

This guide covers how to install and run NodeJS (aka "Node" or "Node.js").


## About

NodeJS is a way of running JavaScript on the _server_ rather than in the browser. 

Where it can run:

- Web (for desktop and mobile browsers)
- Mobile app (e.g. with React Native)
- Desktop app (e.g. with Proton Native or Electron)

Some things you could build:

- Simple scripts for use in the command-line
- Automation tools (browser tests or web scrapers
- Games
- Web servers
- Single-Page Applications (using server-side code to build a front-end app that could be served with a Node server or as static assets)
- REST and GraphQL APIs, which have a database behind them

Node is single-threaded and so it is great for concurrency and asynchronous tasks. 

But it is not great at CPU-bound tasks like reading files or machine learning. So Python is a much better alternative for machine learning, leveraging its multiprocessing support (processes across CPUs).


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
- Tutorials
    - [Node.js Built-in Modules](https://www.w3schools.com/nodejs/ref_modules.asp) on W3 schools.
    - [Node.js](https://www.w3schools.com/nodejs/default.asp) on W3 Schools
- Courses
    - [Intro to Node.js](https://frontendmasters.com/courses/node-js/) on FrontEnd Masters.


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
