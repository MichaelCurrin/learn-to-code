# JavaScript instructions

## Install NodeJS

**Linux**

```bash
$ sudo apt install nodejs
```

**Mac OS X**

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

- [Homepage](https://reactjs.org/).
    > A JavaScript library for building user interfaces
- [Intro to React](https://reactjs.org/tutorial/tutorial.html) tutorial.
- [Getting started](https://reactjs.org/docs/getting-started.html) installation guide.
- [Main concepts](https://reactjs.org/docs/hello-world.html). Starting at Hello world.
    ```javascript
    ReactDOM.render(
        <h1>Hello, world!</h1>,
        document.getElementById('root')
    );
    ```
- [Github repo](https://github.com/facebook/react/).
    > A declarative, efficient, and flexible JavaScript library for building user interfaces.

### Angular

Used for developing a Single Page Application (SPA). It allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding.

It is an open source project used by Google.

- [Homepage](https://angular.io/).
    > One framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) to get started in 5 minutes.
- [Github repo](https://github.com/angular/angular).
    > Angular is a development platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages.
