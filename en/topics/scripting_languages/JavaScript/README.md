# JavaScript

- [What is JavaScript?](#what-is-javascript)
    - [What can you do with JavaScript?](#what-can-you-do-with-javascript)
    - [Why learn JavaScript - 5 good reasons](#why-learn-javascript---5-good-reasons)
- [How to run](#how-to-run)
    - [Browser](#browser)
    - [Command-line](#command-line)
- [Run project files](#run-project-files)
    - [Scripts](#scripts)
    - [HTML demos](#html-demos)
- [Resources](#resources)
    - [Command-line tools](#command-line-tools)
- [Libraries](#libraries)
    - [Convenience](#convenience)
    - [Templating libraries](#templating-libraries)
    - [Dataviz libraries](#dataviz-libraries)
    - [Frameworks](#frameworks)
- [CDNs](#cdns)

## What is JavaScript?

> - JavaScript is the Programming Language for the Web
> - JavaScript can update and change both HTML and CSS
> - JavaScript can calculate, manipulate and validate data - [source](https://www.w3schools.com/whatis/whatis_js.asp)

JavaScript was design to run a host environment such as the browser, with support added later as "Node" to run in a standalone environment like many other languages do. This is done through modifications (updates) to the [Document Object Model](https://en.m.wikipedia.org/wiki/Document_Object_Model) or _DOM_, which a tree structure of elements on the page. The DOM might initially match the initial HTML fetched and that can be seen with View Source, but when content changes you'll have to look at the DOM in your browser's dev tools.

In the browser, JavaScript takes care of the behavior (interactivity) part of the experience, while HTML handles the content and CSS is the styling. JavaScript allows you to read and manipulate the page to make a it dynamic. Such as pulling in photos as a user scrolls, adding a style or CSS class to an element on a condition, creating a pop-up when a condition is met or even making a game.

While JavaScript typically exists as a script directly on the page or pulled in as a standalone file, an internet connection is not needed to execute JavaScript. As it runs on the browser, independent of the server which initially sent the HTML and JavaScript. However, you may see reduced functionality or errors especially around creating or reading content on the server such as an image, post or user details.

JavaScript's origins are covered [here](https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript).


### What can you do with JavaScript?

Here are some typical cases for JavaScript. Some are in the browser, some are on the server side, some are mix of both.

- make a webpage dynamic (fetching and load data, add validation and transitions)
- single-page application
- web server
- API
- game design
- mobile apps
- machine learning
- web scraping
- automation (fetching, transforming and exporting CSV, JSON or database data)


### Why learn JavaScript - 5 good reasons

Summarized from article [here](https://medium.com/duomly-blockchain-online-courses/why-learn-javascript-5-good-reasons-42aa0d021b4f).

1. Easy to start with
2. Great career opportunities
3. Wide range of usage
4. A large community
5. Plenty of sources to learn from


## How to run


### Browser

If you have a browser installed, then you can already run JavaScript through webpages which run scripts.

Or through the console - open the dev tools panel from settings or right-click on the page and click Inspect Element and look for the _Console_ tab.

Jump to [browser_usage](browser_usage.md).

### Command-line

If you want to run JavaScript in the command-line, see these docs:

- [Node](node.md)
- [Node packages](node_packages.md) - covers NPM and NVM.

## Run project files

### Scripts

See the [scripts](scripts) directory.

You can run the `.js` files there using instructions below, if you have [node](node.md) installed.

```sh
$ cd <PATH_TO_REPO>
$ cd en/topics/scripting_languages/JavaScript/scripts
$ node basics/iteration.js
```

### HTML demos

See the [html_demos](html_demos/) directory.

Start a web server in that directory or use VS Code's Live Server extensions.

Note that you cannot simply open an HTML page in your browser without a server first, otherwise the JS will not run.

## Resources

- [JavaScript](https://en.wikipedia.org/wiki/JavaScript) on Wikipedia.
    > JavaScript, often abbreviated as JS, is a high-level, just-in-time compiled, multi-paradigm programming language that conforms to the ECMAScript specification.
- Node
    - Run JavaScript on the server, as backend scripts or for build frontend applications.
    - Jump to [Node](node.md) doc.
- Tutorials
    - [JavaScript.com](https://www.javascript.com/) by [Pluralsite](https://www.pluralsight.com/)
    - [What is JavaScript?](https://www.w3schools.com/whatis/whatis_js.asp) quickstart on W3 Schools.
    - [JS tutorial](https://www.w3schools.com/js/default.asp) on W3 Schools.
    - Mozilla docs
        - [Tutorials](https://developer.mozilla.org/en-US/docs/Web/JavaScript#Tutorials). See also on that page _Tools and resources_.
        - [A re-introduction to JavaScript (JS tutorial)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript). This starts with the basics.
- Docs
    - [JavaScript](https://devdocs.io/javascript/) docs on [devdocs.io](https://devdocs.io/).
    - [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) docs on [developer.mozilla.org](https://developer.mozilla.org/). Includes guides for beginner, intermediate and advanced users and also function references.
        - [Reference](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference)
        - [Classes](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes)
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
    - Skip ahead to [NodeJS](#nodejs) section.
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


## Libraries

JavaScript libraries can be loaded and run in the browser and also on the command-line. They can often run on both, though you may get limited benefit from running backend code in a browser or trying to build a frontend with no browser to view it in.

### Convenience

- jQuery
    - Widely used, as jQuery makes it easy to do actions like selecting and updating elements or fetching resources, by using light code.
    - the JavaScript executed internally by jQuery works great across browsers (which each have their own implementation of how things work in JS). So you don't have to worry about that.
    - [Official page](https://jquery.com/)
        - >The Write Less, Do More, JavaScript Library
        - The homepage shows example uses.
    - [Wikipedia](https://en.wikipedia.org/wiki/JQuery)
        - > jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.
    - [Download](https://jquery.com/download/).
    - [API](https://api.jquery.com/) in docs.
    - Tutorials
        - W3 Schools
            - [Get Started](https://www.w3schools.com/jquery/jquery_get_started.asp).
            - [jQuery](https://www.w3schools.com/jquery/default.asp).
            - [Tutorial](https://www.w3schools.com/jquery/). The sidebar covers common usecases.
        - [jQuery FAQs](https://www.tutorialrepublic.com/faq.php#javascript-jquery) on a tutorial website
- ListJS
    - [listjs.com](https://listjs.com)
        > Tiny, invisible and simple, yet powerful and incredibly fast vanilla JavaScript that adds search, sort, filters and flexibility to plain HTML lists, tables, or anything.
    - Add search, sort and filter to your HTML page.


### Templating libraries

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

### Dataviz libraries

- [D3.js](https://d3js.org/)
- [ApexCharts.js](https://apexcharts.com/)
- [Highcharts](https://www.highcharts.com/)
- roughViz
    - [jwilber/roughViz](https://github.com/jwilber/roughViz) on Github.
    - [roughviz](https://pypi.org/project/roughviz/) as a _Python_ package.
    - [Tutorial](https://medium.com/better-programming/visualize-your-data-with-hand-drawn-charts-with-the-roughviz-charting-library-a3a9f3ee4f84) blog post.

### Frameworks

See [JS Frameworks](frameworks.md) doc in this project for frontend and backend JS frameworks.

## CDNs

Content Delivery Networks ([Wikipedia](https://en.wikipedia.org/wiki/Content_delivery_network)) where libraries can be downloaded.

- CloudFare
    - Homepage [cdnjs.com/](https://cdnjs.com/)
    - e.g. [cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js)
- Unpkg
    - Homepage [unpkg.com/](https://unpkg.com/)
    - e.g. [unpkg.com/jquery@3.4.1/dist/jquery.js](https://unpkg.com/jquery@3.4.1/dist/jquery.js)
