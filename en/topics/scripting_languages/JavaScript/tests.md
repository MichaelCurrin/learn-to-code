# Tests
> Guide to tests in JavaScript

Consider 3 areas:

- Unit tests (like functions)
- Integration tests (like database or API calls)
- End-to-end tests (like checking the production site is live and rendering expected content)

Also consider:

- Backend
    - Test the server-side Node.js
- Frontend
    - Test the browser side as HTML and JS. 
    - A virual or real browser is needed to render a JS component in the DOM.

There are various NPM packages available to help you write tests for these areas. 


## Frameworks

Here is an overview.

See this [Top 5 JS Testing Frameworks](https://www.browserstack.com/guide/top-javascript-testing-frameworks) guide.

See also the Vue 2 [Testing](https://vuejs.org/v2/guide/testing.html) guide.

### Mocha

- [mochajs.org](https://mochajs.org/)
- Backend and frontend support.
- Flexible. Allows choosing of libraries for common features - like Chai for assertions.

### Jest

- [jestjs.io](https://jestjs.io/)
- Simple, light and fast.
- Works with zero configuration.
- Preferred for React.
- Allows use of snapshots.

### Jasmine

- [jasmine.github.io](https://jasmine.github.io/)
- Supports Behavior-Driven Development (BDD).
- Preferred for frontend testing.
- Doesn't require any DOM.

### Karma

- [karma-runner.github.io](https://karma-runner.github.io/latest/index.html)
- A test runner created by the AngularJS team to suit all their needs.
- Test on real devices and browsers possible.
- Providers support for headless browser like PhantomJS.
- Supports remote testing directly from a terminal or IDE.

### Puppeteer

- [Puppeteer](https://developers.google.com/web/tools/puppeteer) docs
- [pptr.dev](https://pptr.dev/)
- Made by Google.
- For high-level browser control.
- Easy to use for automated UI tests, form submissions and keyboard inputs.
- [Using Jest with Puppeteer](https://jestjs.io/docs/en/puppeteer)
