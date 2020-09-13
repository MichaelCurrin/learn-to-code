# JS Frameworks

Javascript frameworks are libraries (usually available as _npm_ packages) that let you build modern, dynamic, interactive, animated frontends using abstractions like components so you don't have to write low-level JavaScript.

See [10 Best JavaScript Frameworks to Use in 2019](
https://hackr.io/blog/10-best-javascript-frameworks-2019).

Below are summaries of some popular JavaScript frameworks, including links and _hello world_ code snippets. The focus of this list is on frameworks for building web apps, both on the frontend (client-side rendering) and backend (server-sider rendering).


## React

### Why React?

The main reason is that React has a declarative language to model UI and state.

React's purpose:

- Declaratively describe user interfaces (UI) and model the state of these interfaces.
- i.e. use it describe what a finished interface or state should look like and do and React will figure how to get to that.
- This saves developers at lot of time and as you don't have to check the state before making transaction-level adjustments.

See [Why React?](https://jscomplete.com/learn/why-react) on JSComplete site.

### Info about React

- It is used to develop a dynamic user interface so the DOM is built on the _client side_ - as a Single-Page Application (SPA). 
- This scales well for high volume traffic.
- This works well for dynamic data such as reading or storing from a backend or database or querying other API services.
- It is very popular (5th most starred JS library on Github) and used on major sites Facebook, Netflix, and Khan Academy.
- React does not call itself a "framework" but just a "library". It is easy to extend, not opinionated and it is modular (you can use just a part you need without the whole thing).
- React is a library for building _user interfaces_. If an environment such as the web browser can run plain JavaScript, then you can build an interface for it using React.
- React will compiled to optimized low-level JavaScript code.
- React is "just JavaScript" - yes you have to learn the React API but you can use plain JavaScript inside React and the result is JavaScript. i.e. After compiling to a build directory, you can serve the application _without_ React installed. And you don't have to load React on the browser side, just the bundled JavaScript file (webpack helps for this).

### Resources

- React official site
	- [reactjs.org homepage](https://reactjs.org/).
	    > A JavaScript library for building user interfaces
	- Tutorials and guides
		- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
		- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
		- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
		- [Introducing JSX](https://reactjs.org/docs/introducing-jsx.html)
- [Github repo: facebook/react](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.
- [NPM package: react](https://www.npmjs.com/package/react)
- Tutorials
	- [Styled components](https://styled-components.com/docs) website - guide to style your React.js apps without stress.
	- [Reaxt Beyond The Basics](https://jscomplete.com/learn/react-beyond-basics/introduction). Note "React Commonly Faced Problems" section if you are a beginner struggling with the JavaScript syntax.
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
- Videos
	- [Get started with React in under 10 minutes](https://youtu.be/K02AkMbV1HM) on Youtube.
- Extensions for VS Code
	- [ReactJS snippets](https://marketplace.visualstudio.com/items?itemName=xabikos.ReactSnippets)
	- [React snippets](https://marketplace.visualstudio.com/items?itemName=ugross.vscode-react-snippets)
	- [React snippet](https://marketplace.visualstudio.com/items?itemName=NicholasHsiang.vscode-react-snippet)
	- [ES7 React/Redux/GraphQL/React-Native snippets](https://marketplace.visualstudio.com/itemdetails?itemName=dsznajder.es7-react-js-snippets)
		- Featured in [The Best React Extension](https://scotch.io/tutorials/the-best-react-extension-for-vs-code) article on Scotch.io site.
	
### React root

React runs off of a single `index.html` file with a `div` like this. Sometimes just `"root"`.

```html
<div id="react-root">
</div>
```

On the Instagram site, you will find something like that on their HTML source:

If you disable JavaScript and reload the page, you will only see the Instagram logo display, since everything else is rendered by JavaScript.


### Hello world

```html
<div id="root">
</div>

<script>
    ReactDOM.render(
        <h1>Hello, world!</h1>,
        document.getElementById('root')
    );
</script>
```

That uses JSX syntax, so you'll need the React library and Babel internally to convert that to plain JavaScript and run it.


### Routing

If you add React Router library you can handle switching between browser paths easily.

- https://reacttraining.com/react-router/
	> Components are the heart of React's powerful, declarative programming model. React Router is a collection of navigational components that compose declaratively with your application. Whether you want to have bookmarkable URLs for your web app or a composable way to navigate in React Native, React Router works wherever React is rendering--so take your pick!

Here is a quickstart for that.

```jsx
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

See a [basic example](https://reacttraining.com/react-router/web/example/basic) on the React Router site.

```jsx
import React from "react";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";

// This site has 3 pages, all of which are rendered
// dynamically in the browser (not server rendered).
//
// Although the page does not ever refresh, notice how
// React Router keeps the URL up to date as you navigate
// through the site. This preserves the browser history,
// making sure things like the back button and bookmarks
// work properly.

export default function BasicExample() {
  return (
    <Router>
      <div>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/about">About</Link>
          </li>
          <li>
            <Link to="/dashboard">Dashboard</Link>
          </li>
        </ul>

        <hr />

        {/*
          A <Switch> looks through all its children <Route>
          elements and renders the first one whose path
          matches the current URL. Use a <Switch> any time
          you have multiple routes, but you want only one
          of them to render at a time
        */}
        <Switch>
          <Route exact path="/">
            <Home />
          </Route>
          <Route path="/about">
            <About />
          </Route>
          <Route path="/dashboard">
            <Dashboard />
          </Route>
        </Switch>
      </div>
    </Router>
  );
}

// You can think of these components as "pages"
// in your app.

function Home() {
  return (
    <div>
      <h2>Home</h2>
    </div>
  );
}

function About() {
  return (
    <div>
      <h2>About</h2>
    </div>
  );
}

function Dashboard() {
  return (
    <div>
      <h2>Dashboard</h2>
    </div>
  );
}
```

## React Native

Use a single JavaScript codebase that runs on Node and compiles to _native_ Android and iOS mobile apps, with great performance and native elements. And it also runs as a desktop web app.

Knowing some React first course will make React Native easier.

As an alternative, see the [Dart](/en/topics/scripting_languages/Dart) language (similar to JavaScript and created by Google), where the "Flutter" library is used to make native mobile apps.

### Resources

- [reactnative.dev](https://reactnative.dev) homepage
	> Learn once, write anywhere.
	> Create native apps for Android and iOS using React.
	>
	> Written in JavaScript - rendered with native code.
	>
	> React Native is like React, but it uses native components instead of web components as building blocks.
- [Getting Started](https://reactnative.dev/docs/getting-started)
https://reactnative.dev/docs/0.60/getting-started
    > This page will help you install and build your first React Native app.
	- Includes an interactive example,
- Tutorials
    - [Learn the basics](https://facebook.github.io/react-native/docs/tutorial).
- [Github repo](https://github.com/facebook/react-native)
- Online IDE
	- [expo.io](https://expo.io/)
		> With Expo tools, services, and React, you can build, deploy, and quickly iterate on native Android, iOS, and web apps from the same JavaScript codebase.
		- Create and run apps. Even run on your mobile device.
		- See in particular [snack.expo.io](https://snack.expo.io/)
		

### Hello world

- `App.js`
	```javascript
	import React, { Component } from 'react';
	import { Text, View } from 'react-native';

	export default class HelloWorldApp extends Component {
		render() {
			return (
			<View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
				<Text>
					Hello, world!
				</Text>
			</View>
			);
		}
	}
	```

### Asset example

Copied from the https://snack.expo.io/ example app.

- `assets/snackIcon.png`
- `components/AssetExample.js`
	```javascript
	import * as React from 'react';
	import { Text, View, StyleSheet, Image } from 'react-native';

	export default function AssetExample() {
	  return (
		<View style={styles.container}>
		  <Text style={styles.paragraph}>
			Local files and assets can be imported by dragging and dropping them into the editor
		  </Text>
		  <Image style={styles.logo} source={require('../assets/snack-icon.png')} />
		</View>
	  );
	}

	const styles = StyleSheet.create({
	  container: {
		alignItems: 'center',
		justifyContent: 'center',
		padding: 24,
	  },
	  paragraph: {
		margin: 24,
		marginTop: 0,
		fontSize: 14,
		fontWeight: 'bold',
		textAlign: 'center',
	  },
	  logo: {
		height: 128,
		width: 128,
	  }
	});
	```
- `App.js`
	```javascript
	import * as React from 'react';
	import { Text, View, StyleSheet } from 'react-native';
	import Constants from 'expo-constants';

	// You can import from local files
	import AssetExample from './components/AssetExample';

	// or any pure javascript modules available in npm
	import { Card } from 'react-native-paper';

	export default function App() {
	  return (
		<View style={styles.container}>
		  <Text style={styles.paragraph}>
			Change code in the editor and watch it change on your phone! Save to get a shareable url.
		  </Text>
		  <Card>
			<AssetExample />
		  </Card>
		</View>
	  );
	}

	const styles = StyleSheet.create({
	  container: {
		flex: 1,
		justifyContent: 'center',
		paddingTop: Constants.statusBarHeight,
		backgroundColor: '#ecf0f1',
		padding: 8,
	  },
	  paragraph: {
		margin: 24,
		fontSize: 18,
		fontWeight: 'bold',
		textAlign: 'center',
	  },
	});
	```
	
### Package

Example `package.json`.

```json
{
  "dependencies": {
    "react-native-paper": "3.6.0"
  }
}
```


## Electron

Build desktop apps with [Electron.js](https://www.electronjs.org/).

### What can I build with Electron?

See the [10 Most Popular Electron Apps of 2019](https://wiredelta.com/10-most-popular-electron-apps-2019/).

- Visual Studio Code (VS Code)
- Slack
- Tusk
- Mailspring
- Skype
- Discord
- Streamlabs OBS
- WordPress Desktop
- Atom (IDE)
- WhatsApp desktop


See the [apps](https://www.electronjs.org/apps) list on the Electron site where you can find those and hundreds more.

### Resources

- [Official homepage](https://www.electronjs.org/)
	- > Build cross-platform desktop apps with JavaScript, HTML, and CSS
	- > If you can build a website, you can build a desktop app. Electron is a framework for creating native applications with web technologies like JavaScript, HTML, and CSS. It takes care of the hard parts so you can focus on the core of your application.
- [Wikipedia](https://en.wikipedia.org/wiki/Electron_(software_framework))
	- > Electron is an open-source framework developed and maintained by GitHub. Electron allows for the development of desktop GUI applications using web technologies. It combines the Chromium rendering engine and the Node.js runtime. Electron is the main GUI framework behind several notable open-source projects including Atom, GitHub Desktop, Light Table, Visual Studio Code, and WordPress Desktop.
- Videos
	- [What is Electron? The hard parts made easy](https://youtu.be/8YP_nOCO-4Q) on Youtube.


## Proton Native

Build desktop applications - built on React Native.

### Resources

 - [Official homepage](https://proton-native.js.org/#/)
	 - > Create desktop applications through a React syntax, on all platforms.
	 - Features
	    > - Same syntax & components as React Native
	    > - Works with existing React libraries such as Redux
	    > - Cross platform
	    > - No more Electron
	    > - Compatible with all normal Node.js packages
	    > - Hot reloading


## Angular

This allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding. It is used for developing Single Page Applications (SPA).

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

### Resources

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
	- [Vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur) for `.vue` file syntax highlighting and other tooling.
- Plugins
	- [Plugins guide](https://vuejs.org/v2/guide/plugins.html) on Vue docs. See topics like routing, state-management and serve-side rendering.
	- [Vuex](https://vuex.vuejs.org/)
		- For storing and managing state. Similar to Flux or Redux of React.
	
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

### CLI

You can build and run a Vue app without local dependencies - as Vue and plugins can be loaded in the browser.

However, it is common to use the Vue CLI as it has a lot of features useful for development.

- [Vue CLI](https://cli.vuejs.org/) homepage.

Install this NPM package:

```sh
npm install -g @vue/cli
# OR
yarn global add @vue/cli
```


## Vue Native

- [vue-native.io/](https://vue-native.io/) homepage
