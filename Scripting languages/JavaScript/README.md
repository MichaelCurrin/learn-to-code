# JavaScript


## What is JavaScript?

> - JavaScript is the Programming Language for the Web
> - JavaScript can update and change both HTML and CSS
> - JavaScript can calculate, manipulate and validate data - [source](https://www.w3schools.com/whatis/whatis_js.asp)

## Resources

- [JavaScript](https://en.wikipedia.org/wiki/JavaScript) on Wikipedia.
    > JavaScript (/ˈdʒɑːvəˌskrɪpt/),[9] often abbreviated as JS, is a high-level, just-in-time compiled, multi-paradigm programming language that conforms to the ECMAScript specification.
- [NodeJS](https://en.wikipedia.org/wiki/Node.js) on Wikipedia.
    > Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser.
- [NodeJS official site](https://nodejs.org)
- Tutorials
    - [JavaScript](https://www.javascript.com/) by Pluralsite
    - W3 Schools [JS tutorial](https://www.w3schools.com/js/default.asp) and [What is JavaScript?] quickstart.
- Online IDE
    - [Runkit](https://runkit.com/home)
      > Runkit is a node playground in your browser.
      > ... you can require any npm package instantly.
    - [NPM Runkit](https://npm.runkit.com/) e.g. https://npm.runkit.com/request
    - CodePen [JS Console](https://codepen.io/idesi/pen/rLgaJO) and existing [JavaScript-tagged pens](https://codepen.io/tag/javascript/).

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

```bash
$ sudo apt install nodejs
```

**macOS**

```bash
$ brew install nodejs
```

## Run

### Interactive console

Follow one of the following approaches:

* Command-line (this approach requires [NodeJS](#nodejs) to be installed)
    1. Start the interactive console.
        ```bash
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

How to run scripts in this project using Node.

```bash
$ cd <PATH_TO_REPO>
$ cd 'Scripting languages/JavaScript'
$ node my_file.js
$ # e.g.
$ node iteration.js
```

## Libaries

- jQuery
    - [Official page](https://jquery.com/) 
        - >The Write Less, Do More, JavaScript Library
        - The homepage shows example uses.
    - [Wikipedia](https://en.wikipedia.org/wiki/JQuery)
        - > jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.
    - Tutorials
        - [W3 schools](https://www.w3schools.com/jquery/default.asp)
        - [jQuery FAQs](https://www.tutorialrepublic.com/faq.php#javascript-jquery) on a tutorial website
- Moustache
    - [Official page](https://mustache.github.io/)
        > Logic-less templates.
    - HTML templating on the server or browser side
    - [npm](https://www.npmjs.com/package/mustache)
    - CDN
        - [Cloudfare](https://cdnjs.com/libraries/mustache.js/)

See more below in [Frameworks](#frameworks).

### CDNs

Content Delivery Networks ([Wikipedia](https://en.wikipedia.org/wiki/Content_delivery_network)) where libraries can be downloaded.

- CloudFare
    - Homepage [cdnjs.com/](https://cdnjs.com/)
    - e.g. [cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js)
- Unpkg
    - Homepage [unpkg.com/](https://unpkg.com/)
    - e.g. [unpkg.com/jquery@3.4.1/dist/jquery.js](https://unpkg.com/jquery@3.4.1/dist/jquery.js)


## Frameworks

Javascript framework are libraries (usually available as _npm_ packages) let you build modern, dynamic, interactive, animated frontends using abstractions like components so you don't have to write low-level JavaScript.

See [10 Best JavaScript Frameworks to Use in 2019](
https://hackr.io/blog/10-best-javascript-frameworks-2019).

Below are summaries of popular JavaScript frameworks with links and hello world code snippets.

### React

Used to develop a dynamic user interface so the DOM is built on the client side - a Single-Page Application (SPA). This scales well for high volume traffic.

Instagram is an example of a React site. You can find something like this on the HTML source.

```html
<div id="react-root">
</div>
```

If you disable JavaScript, you just see and empty page with the Instagram logo.

#### Links

- [Official site](https://reactjs.org/).
    > A JavaScript library for building user interfaces
- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
- [Github repo](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.

#### Hello world

```html
<div id="root"></div>

<script>
    ReactDOM.render(
        <h1>Hello, world!</h1>,
        document.getElementById('root')
    );
</script>
```

### React Native

#### Links

- [Official site](https://facebook.github.io/react-native/).
    > Create native apps for Android and iOS using React.
    > Written in JavaScript - rendered with native code.
    > React Native is like React, but it uses native components instead of web components as building blocks.
- [Getting Started](https://facebook.github.io/react-native/docs/getting-started)
    > This page will help you install and build your first React Native app.
- Tutorials
    - [Learn the basics](https://facebook.github.io/react-native/docs/tutorial).
- [Github repo](https://github.com/facebook/react-native)

#### Hello world

```javascript
import React, { Component } from 'react';
import { Text, View } from 'react-native';

export default class HelloWorldApp extends Component {
    render() {
        return (
        <View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
            <Text>Hello, world!</Text>
        </View>
        );
    }
}
```

### Angular

It allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding. It is used for developing Single Page Applications (SPA).

It is an open source project used by Google.

#### Links

- [Official site](https://angular.io/).
    > One framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) to get started in 5 minutes.
- [Github repo](https://github.com/angular/angular).
    > Angular is a development platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages.
- [Cheatsheet](https://angular.io/guide/cheatsheet)

#### Hello world

From [AngularJS Hello World Application: Your First Example Program ](https://www.guru99.com/angularjs-first-program.html).

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf 8">
    <title>Hello World</title>
</head>

<body ng-app="app">
    <h1 ng-controller="HelloWorldCtrl">{{ message }}</h1>

    <script src="https://code.angularjs.org/1.6.9/angular.js"></script>
    <script>
        angular.module("app", []).controller("HelloWorldCtrl", function($scope) {
            $scope.message="Hello, world!"
        });
    </script>

</body>

</html>
```


### Vue

A progressive framework for building user interfaces. It used for developing Single Page Applications (SPA).

> Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.

#### Links

- [Official site](https://vuejs.org)
- [Installation](https://vuejs.org/v2/guide/installation.html)
- [Introduction](https://vuejs.org/v2/guide/index.html)
- [Examples](https://vuejs.org/v2/examples/)
- [Github repo](https://github.com/vuejs/vue)

#### Hello world

In this simplified example, all the CSS and JS are in the single HTML file.

Based on [tutorial](https://scrimba.com/p/pXKqta/cQ3QVcr).

```html
<html>
    <head>
        <style>
            html, body {
                margin: 5px;
                padding: 0;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>

    <body>
        <div id="app">
            {{ message }}
        </div>

        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Hello, world!'
                }
            });
        </script>
    </body>

</html>
```
