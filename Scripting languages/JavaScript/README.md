# JavaScript

## Resources

- Tutorials
    - W3 Schools [JS tutorial](https://www.w3schools.com/js/default.asp)
- Online IDE
    - [Runkit](https://runkit.com/home)
      > Runkit is a node playground in your browser.
      > ... you can require any npm package instantly.
    - [NPM Runkit](https://npm.runkit.com/) e.g. https://npm.runkit.com/request

## Install NodeJS

**Linux**

```bash
$ sudo apt install nodejs
```

**macOS**

```bash
$ brew install nodejs
```

## Run

### Console

Use one of the following approaches:

* Command-line:
    1. Start the interactive console.
        ```bash
        $ node
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


### Run project scripts

```bash
$ cd <PATH_TO_REPO>/JavaScript
$ node FILE
$ # e.g.
$ node iteration.js
```

## Frameworks

See [10 Best JavaScript Frameworks to Use in 2019](
https://hackr.io/blog/10-best-javascript-frameworks-2019).

### React

Used to develop a dynamic user interface so the DOM is built on the client side. This scales well for high volume traffic.

#### Links

- [Official site](https://reactjs.org/).
    > A JavaScript library for building user interfaces
- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
- [Github repo](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.

#### Hello world

```javascript
ReactDOM.render(
    <h1>Hello, world!</h1>,
    document.getElementById('root')
);
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
            $scope.message="Hello World"
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
                    message: 'Hello World'
                }
            });
        </script>
    </body>

</html>
```
