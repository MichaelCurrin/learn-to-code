# Frameworks

Javascript framework are libraries (usually available as _npm_ packages) let you build modern, dynamic, interactive, animated frontends using abstractions like components so you don't have to write low-level JavaScript.

See [10 Best JavaScript Frameworks to Use in 2019](
https://hackr.io/blog/10-best-javascript-frameworks-2019).

Below are summaries of popular JavaScript frameworks with links and hello world code snippets. The focus of this list is on frameworks for building web apps, on the frontend (client-side rendering) or backend (server-sider rendering)

## React

Used to develop a dynamic user interface so the DOM is built on the client side - a Single-Page Application (SPA). This scales well for high volume traffic.

Instagram is an example of a React site. You can find something like this on the HTML source.

```html
<div id="react-root">
</div>
```

If you disable JavaScript, you just see and empty page with the Instagram logo.

### Links

- [Official site](https://reactjs.org/).
    > A JavaScript library for building user interfaces
- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
- [Github repo](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.
- [Styled components](https://styled-components.com/docs) - style your React.js apps without stress.

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

## Angular

It allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding. It is used for developing Single Page Applications (SPA).

It is an open source project used by Google.

### Links

- [Official site](https://angular.io/).
    > One framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) to get started in 5 minutes.
- [Github repo](https://github.com/angular/angular).
    > Angular is a development platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages.
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
