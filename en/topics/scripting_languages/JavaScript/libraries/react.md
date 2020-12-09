# React

Build user interfaces. Such as games, forms and websites.

React was originally made for the web but it has been extended to mobile with [React Native](#react-native) and desktop with [Node GUI](https://blog.bitsrc.io/building-native-desktop-application-with-react-node-gui-2ce1b2a2164?gi=8336751480b).


## Why React?

The main reason is that React has a declarative language to model UI and state.

React's purpose:

- Declaratively describe user interfaces (UI) and model the state of these interfaces.
- i.e. use it describe what a finished interface or state should look like and do and React will figure how to get to that.
- This saves developers at lot of time and as you don't have to check the state before making transaction-level adjustments.

See [Why React?](https://jscomplete.com/learn/why-react) on JSComplete site.


## Info about React

- It is used to develop a dynamic user interface so the DOM is built on the _client side_ - as a Single-Page Application (SPA).
- This scales well for high volume traffic.
- This works well for dynamic data such as reading or storing from a backend or database or querying other API services.
- It is very popular (5th most starred JS library on GitHub) and used on major sites Facebook, Netflix, and Khan Academy.
- React does not call itself a "framework" but just a "library". It is easy to extend, not opinionated and it is modular (you can use just a part you need without the whole thing).
- React is a library for building _user interfaces_. If an environment such as the web browser can run plain JavaScript, then you can build an interface for it using React.
- React will compiled to optimized low-level JavaScript code.
- React is "just JavaScript" - yes you have to learn the React API but you can use plain JavaScript inside React and the result is JavaScript. i.e. After compiling to a build directory, you can serve the application _without_ React installed. And you don't have to load React on the browser side, just the bundled JavaScript file (webpack helps for this).


## Resources

- React official site
	- [reactjs.org homepage](https://reactjs.org/).
	    > A JavaScript library for building user interfaces
	- React's tutorials
		- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
	- React's docs
		- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
		- [Main concepts](https://reactjs.org/docs/hello-world.html), starting at Hello world.
		- [Introducing JSX](https://reactjs.org/docs/introducing-jsx.html)
- NPM: [react](https://www.npmjs.com/package/react) package
- GitHub: [GitHub repo: facebook/react](https://github.com/facebook/react).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.
- [NPM package: react](https://www.npmjs.com/package/react)
- Create React App
	- [create-react-app.dev](https://create-react-app.dev/) homepage
	    - [Getting started](https://create-react-app.dev/docs/getting-started/)
	- GitHub: [facebook/create-react-app](https://github.com/facebook/create-react-app)
- GitHub: [MichaelCurrin/react-quickstart](https://github.com/MichaelCurrin/react-quickstart) - a template project to get started with React.
- Tutorials
	- [Styled components](https://styled-components.com/docs) website - guide to style your React.js apps without stress.
	- [Reaxt Beyond The Basics](https://jscomplete.com/learn/react-beyond-basics/introduction). Note "React Commonly Faced Problems" section if you are a beginner struggling with the JavaScript syntax.
- Courses
    - [Egghead](https://egghead.io/)
        - [React](https://egghead.io/browse/frameworks/react) courses.
    - [Frontend Masters](https://frontendmasters.com/)
        - [React path](https://frontendmasters.com/learn/react/).
    - [PluralSight](https://app.pluralsight.com/) (requires a subscription)
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

## React root

React runs off of a single `index.html` file with a `div` like this. Sometimes just `"root"`.

```html
<div id="react-root"></div>
```

On the Instagram site, you will find something like that on their HTML source:

If you disable JavaScript and reload the page, you will only see the Instagram logo display, since everything else is rendered by JavaScript.

## Hello world

```html
<div id="root"></div>

<script>
    ReactDOM.render(
        <h1>Hello, world!</h1>,
        document.getElementById('root')
    );
</script>
```

That uses **JSX** syntax, so you'll need the React library and Babel internally to convert that to plain JavaScript and run it.

## Create a fresh project

Run the `npx` command to install and run `create-react-app`.

```sh
$ npx create-react-app my-app
$ cd my-app
```

You'll get a project setup like this:

<details>
<summary>File tree</summary>

```
my-app
├── README.md
├── node_modules
├── package.json
├── .gitignore
├── public
│   ├── favicon.ico
│   ├── index.html
│   └── manifest.json
└── src
    ├── App.css
    ├── App.js
    ├── App.test.js
    ├── index.css
    ├── index.js
    ├── logo.svg
    └── serviceWorker.js
    └── setupTests.js
```

</details>

Start the application.

```sh
$ npm start
```


## Routing

If you add React Router library you can handle switching between browser paths easily.

- https://reacttraining.com/react-router/
	> Components are the heart of React's powerful, declarative programming model. React Router is a collection of navigational components that compose declaratively with your application. Whether you want to have bookmarkable URLs for your web app or a composable way to navigate in React Native, React Router works wherever React is rendering--so take your pick!

Here is a quickstart for that.

<details>
<summary>Script</summary>

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

</details>

See a [basic example](https://reacttraining.com/react-router/web/example/basic) on the React Router site.

<details>
<summary>Script</summary>

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

</details>
