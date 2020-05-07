# JS Frameworks

Javascript framework are libraries (usually available as _npm_ packages) let you build modern, dynamic, interactive, animated frontends using abstractions like components so you don't have to write low-level JavaScript.

See [10 Best JavaScript Frameworks to Use in 2019](
https://hackr.io/blog/10-best-javascript-frameworks-2019).

Below are summaries of popular JavaScript frameworks with links and hello world code snippets. The focus of this list is on frameworks for building web apps, on the frontend (client-side rendering) or backend (server-sider rendering).

## React

Used to develop a dynamic user interface so the DOM is built on the client side - a Single-Page Application (SPA). This scales well for high volume traffic.

It is the very popular (5th most starred JS library on Github) and used on major sites Facebook, Netflix, and Khan Academy.

On the Instagram site, you will find something like this on their HTML source:

```html
<div id="react-root">
</div>
```

If you disable JavaScript and reload the page, you will only see the Instagram logo display, since everything else is rendered by JavaScript.

### Links

- [Official site](https://reactjs.org/).
    > A JavaScript library for building user interfaces
- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
- [Github repo](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.
- [Styled components](https://styled-components.com/docs) - style your React.js apps without stress.
- Courses
    - [Egghead](https://egghead.io/)
        - [React](https://egghead.io/browse/frameworks/react) courses.
    - [Frontend Masters](https://frontendmasters.com/)
        - [React path](https://frontendmasters.com/learn/react/).
    - [Pluralsight](https://app.pluralsight.com/) (requires a subscription)
        - [React path](https://app.pluralsight.com/paths/skill/react).
        - [A practical start with React](https://app.pluralsight.com/library/courses/react-practical-start/table-of-contents)
        - [React: Getting Started](https://app.pluralsight.com/library/courses/react-js-getting-started/table-of-contents)
        - [React Fundamentals](https://app.pluralsight.com/library/courses/react-fundamentals-update/table-of-contents)
        - [Advanced React.js](https://app.pluralsight.com/library/courses/reactjs-advanced/table-of-contents)
    - [Scotch.io](https://scotch.io/) (free courses)
        - [Getting started with React](https://scotch.io/starters/react/getting-started-with-react-2019-edition?ref=home-start-here)


### Hello world

```html
<div id="root"></div>

<script>
    ReactDOM.render(
        <h1>Hello, world!</h1>,
        document.getElementById('root')
    );
</script>
```

### Routing

If you add React Router library you can handle switching between browser paths easily. Here is a quickstart for that.


```javascript
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter } from "react-router-dom";

function App() {
  return <h1>Hello, world! This is React Router</h1>;
}

ReactDOM.render(
  <BrowserRouter>
    <App />
  </BrowserRouter>,
  document.getElementById("root")
);
```


## React Native

### Links

- [Official site](https://facebook.github.io/react-native/).
    > Create native apps for Android and iOS using React.
    > Written in JavaScript - rendered with native code.
    > React Native is like React, but it uses native components instead of web components as building blocks.
- [Getting Started](https://facebook.github.io/react-native/docs/getting-started)
    > This page will help you install and build your first React Native app.
- Tutorials
    - [Learn the basics](https://facebook.github.io/react-native/docs/tutorial).
- [Github repo](https://github.com/facebook/react-native)

### Hello world

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

## Electron




- [Official homepage](https://www.electronjs.org/)
	- > Build cross-platform desktop apps with JavaScript, HTML, and CSS
	- > If you can build a website, you can build a desktop app. Electron is a framework for creating native applications with web technologies like JavaScript, HTML, and CSS. It takes care of the hard parts so you can focus on the core of your application.
- [Wikipedia](https://en.wikipedia.org/wiki/Electron_(software_framework))
	- > Electron is an open-source framework developed and maintained by GitHub. Electron allows for the development of desktop GUI applications using web technologies. It combines the Chromium rendering engine and the Node.js runtime. Electron is the main GUI framework behind several notable open-source projects including Atom, GitHub Desktop, Light Table, Visual Studio Code, and WordPress Desktop.

## Proton Native


 - [Official homepage](https://proton-native.js.org/#/)
	 - >  Create desktop applications  through a React syntax, on all platforms.
	 - Features
	    > - Same syntax & components as React Native
	    > - Works with existing React libraries such as Redux
	    > - Cross platform
	    > - No more Electron
	    > - Compatible with all normal Node.js packages
	    > - Hot reloading

## Angular

It allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding. It is used for developing Single Page Applications (SPA).

It is an open source project used by Google.

### Links

- [Official site](https://angular.io/).
    > One framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) to get started in 5 minutes.
- [Github repo](https://github.com/angular/angular).
    > Angular is a development platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages.
- Courses
    - [Egghead](https://egghead.io/)
        - [Angular](https://egghead.io/browse/frameworks/angular) courses.
    - [Frontend Masters](https://frontendmasters.com)
        - [Angular path](https://frontendmasters.com/learn/angular/).
- [Cheatsheet](https://angular.io/guide/cheatsheet)


### Hello world

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


## Vue

A progressive framework for building user interfaces. It used for developing Single Page Applications (SPA).

> Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.

### Links

- [Official site](https://vuejs.org)
- [Installation](https://vuejs.org/v2/guide/installation.html)
- [Introduction](https://vuejs.org/v2/guide/index.html)
- [Examples](https://vuejs.org/v2/examples/)
- [Github repo](https://github.com/vuejs/vue)
- Videos
    - _Vue.js: The Documentary_
        - [Trailer](https://www.youtube.com/watch?v=2EmYw-O-WLI)
        - [Full](https://www.youtube.com/watch?v=OrxmtDw4pVI)
- Courses
    - [Egghead](https://egghead.io/)
        - [Vue](https://egghead.io/browse/frameworks/vue) courses.
    - [Frontend Masters](https://frontendmasters.com)
        - [Vue path](https://frontendmasters.com/learn/vue/).
    - [Pluralsight](https://app.pluralsight.com/)
        - [Vue path](https://app.pluralsight.com/paths/skills/vue)
    - [Scotch.io](https://scotch.io)
        - [Getting Start with Vue](https://scotch.io/courses/getting-started-with-vuejs)
- VS Code extensions
	- [Vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur) for `.vue` file syntax highlighting.
	
	
### Hello world

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

## Redux

A predictable state container for JavaScript apps.

> Redux maintains the state of an entire application in a single immutable state tree (object), which can’t be changed directly. [source](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)

> Redux is an open-source JavaScript library for managing application state. It is most commonly used with libraries such as React or Angular for building user interfaces. Similar to (and inspired by) Facebook's Flux architecture, it was created by Dan Abramov and Andrew Clark. [source](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))

It is an application data-flow architecture, not a framework. Created in 2015, inspired by Facebook's Flux and functional programming language Elm.

### Links

- [Official homepage](https://redux.js.org/)
    - [Getting started](https://redux.js.org/introduction/getting-started)
    - [Examples](https://redux.js.org/introduction/examples)
- [Docs](https://devdocs.io/redux/)
- [Wikipedia](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))
- [An introduction to Redux](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)
- Blogs
    - [Hello world in React-Redux](https://medium.com/@lavitr01051977/easy-redux-b29391b499cb) on Medium
    - [Hello world in React Redux](https://riptutorial.com/react-redux/example/22907/hello-world-using-react-redux) from Rip Tutorial

### Basic example

```javascript
import { createStore } from 'redux'

/**
 * This is a reducer, a pure function with (state, action) => state signature.
 * It describes how an action transforms the state into the next state.
 */
function counter(state = 0, action) {
  switch (action.type) {
    case 'INCREMENT':
      return state + 1
    case 'DECREMENT':
      return state - 1
    default:
      return state
  }
}

let store = createStore(counter)
store.subscribe(() => console.log(store.getState()))
// The only way to mutate the internal state is to dispatch an action.
store.dispatch({ type: 'INCREMENT' })
// 1
store.dispatch({ type: 'INCREMENT' })
// 2
store.dispatch({ type: 'DECREMENT' })
// 1
```
