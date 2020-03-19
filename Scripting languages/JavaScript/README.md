# JavaScript


## What is JavaScript?

> - JavaScript is the Programming Language for the Web
> - JavaScript can update and change both HTML and CSS
> - JavaScript can calculate, manipulate and validate data - [source](https://www.w3schools.com/whatis/whatis_js.asp)

## Resources

- [JavaScript](https://en.wikipedia.org/wiki/JavaScript) on Wikipedia.
    > JavaScript, often abbreviated as JS, is a high-level, just-in-time compiled, multi-paradigm programming language that conforms to the ECMAScript specification.
- Node
    - [NodeJS](https://en.wikipedia.org/wiki/Node.js) on Wikipedia.
        > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
    - [NodeJS official site](https://nodejs.org)
    - [Node docs](https://nodejs.org/en/docs/)
- Tutorials
    - [JavaScript.com](https://www.javascript.com/) by [Pluralsite](https://www.pluralsight.com/)
    - [What is JavaScript?](https://www.w3schools.com/whatis/whatis_js.asp) quickstart on W3 Schools
    - [JS tutorial](https://www.w3schools.com/js/default.asp) on W3 Schools
- Docs
    - [JavaScript](https://devdocs.io/javascript/) docs on [devdocs.io](https://devdocs.io/).
    - [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) docs on [developer.mozilla.org](https://developer.mozilla.org/). Includes guides for beginner, intermediate and advanced users and also function references.
- Courses
    - [Scotch.io](https://scotch.io)
        - [Getting Start with JavaScript](https://scotch.io/courses/getting-started-with-javascript-for-web-development?ref=home-start-here)
- Online IDE
    - [Runkit](https://runkit.com/home)
      > Runkit is a node playground in your browser.
      > ... you can require any npm package instantly.
    - [NPM Runkit](https://npm.runkit.com/) e.g. https://npm.runkit.com/request
    - CodePen [JS Console](https://codepen.io/idesi/pen/rLgaJO) and existing [JavaScript-tagged pens](https://codepen.io/tag/javascript/).


### Command-line tools

Quick reference of links to help you install and use CLI tools relating to JavaScript.

- NodeJS
    - [Homepage](https://nodejs.org/)
    - [About](https://nodejs.org/en/about/)
    - [Download](https://nodejs.org/en/download/)
    - [Releases](https://nodejs.org/en/about/releases)
- NPM (Node Package Manager)
    - [Homepage](npmjs.com/)
    - [About](https://www.npmjs.com/about)
    - [Docs](https://docs.npmjs.com/)
- Yarn
    - [Homepage](https://classic.yarnpkg.com/)
- Webpack
    - [Homepage](https://webpack.js.org/)
- ESLint
    - [Homepage](https://eslint.org/)
    - [Getting started](https://eslint.org/docs/user-guide/getting-started)
    - [Configuring](https://eslint.org/docs/user-guide/configuring)
    - [CLI](https://eslint.org/docs/user-guide/command-line-interface)
    - [Rules](https://eslint.org/docs/rules/)

### Libaries

- jQuery
    - [Homepage](https://jquery.com/).
    - [Get Started](https://www.w3schools.com/jquery/jquery_get_started.asp)
    - [Download](https://jquery.com/download/).
    - [Tutorial](https://www.w3schools.com/jquery/) on W3 Schools. The sidebar covers common usecases.
    - [API](https://api.jquery.com/) in docs.

## Why learn JavaScript - 5 good reasons

Summarized from article [here](https://medium.com/duomly-blockchain-online-courses/why-learn-javascript-5-good-reasons-42aa0d021b4f).

1. Easy to start with.
2. Great career opportunities
3. Wide range of usage
4. Big community
5. Lots of sources to learn

## NodeJS
> Server-side JavaScript

NodeJS is a way of running JavaScript on the server rather than in the browser. This allows you do things like simple scripts in the command-line, automation tools, games and web servers which communicate with a database.

### Install

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

Follow one of the following approaches:

* Command-line (this approach requires [NodeJS](#nodejs) to be installed)
    1. Start the interactive console.
        ```sh
        $ node
        ```
        ```
        Welcome to Node.js v12.1.0.
        Type ".help" for more information.
        >
        ```
* Browser
    1. Open a browser.
    2. Right-click and click _Inspect_.
    3. Open the _Console_ tab.

Enter commands and press enter.

For example:

```javascript
> console.log('Hello!');
```

Press `CTRL`+`D` to exit the console.

### Run project scripts

#### Node

How to run scripts in this project using `node`.

```sh
$ cd <PATH_TO_REPO>
$ cd 'Scripting languages/JavaScript'
$ node my_file.js
$ # e.g.
$ node iteration.js
```

#### NPM

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


## Libraries

- _jQuery_
    - [Official page](https://jquery.com/)
        - >The Write Less, Do More, JavaScript Library
        - The homepage shows example uses.
    - [Wikipedia](https://en.wikipedia.org/wiki/JQuery)
        - > jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.
    - Tutorials
        - [W3 schools](https://www.w3schools.com/jquery/default.asp)
        - [jQuery FAQs](https://www.tutorialrepublic.com/faq.php#javascript-jquery) on a tutorial website
- Templating libraries
    - Mustache JS
        - [Official page](https://mustache.github.io/)
            > Logic-less templates.
        - HTML templating on the server or browser side.
        - [npm](https://www.npmjs.com/package/mustache)
        - [Cloudfare CDN](https://cdnjs.com/libraries/mustache.js/)
    - Handlebars JS
        - [Official page](https://handlebarsjs.com/)
            > Minimal templating on steroids
        - [npm](https://www.npmjs.com/package/handlebars)
        - [Github repo](https://github.com/wycats/handlebars.js)
- Dataviz libraries
    - [D3.js](https://d3js.org/)
    - [ApexCharts.js](https://apexcharts.com/)
    - [Highcharts](https://www.highcharts.com/)
    - roughViz
        - [jwilber/roughViz](https://github.com/jwilber/roughViz) on Github.
        - [roughviz](https://pypi.org/project/roughviz/) as a _Python_ package.
        - [Tutorial](https://medium.com/better-programming/visualize-your-data-with-hand-drawn-charts-with-the-roughviz-charting-library-a3a9f3ee4f84) blog post.

#### Frameworks

See [JS Frameworks](frameworks.md) doc in this project for frontend and backend JS frameworks.

### CDNs

Content Delivery Networks ([Wikipedia](https://en.wikipedia.org/wiki/Content_delivery_network)) where libraries can be downloaded.

- CloudFare
    - Homepage [cdnjs.com/](https://cdnjs.com/)
    - e.g. [cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js)
- Unpkg
    - Homepage [unpkg.com/](https://unpkg.com/)
    - e.g. [unpkg.com/jquery@3.4.1/dist/jquery.js](https://unpkg.com/jquery@3.4.1/dist/jquery.js)
