# Tests
> Guide to software testing in JavaScript

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

See also the Vue 3 [Testing](https://v3.vuejs.org/guide/testing.html) guide.

### Mocha

- [mochajs.org](https://mochajs.org/)
- Backend and frontend support.
    > it can also execute tests in the browser in addition to Node.js.
- Flexible. Requires you to choose libraries to install for common features - like Chai for assertions.
- [Assertions](https://mochajs.org/#assertions) page of the docs
    > Mocha allows you to use any assertion library you wish. In the above example, we’re using Node.js’ built-in `assert` module — but generally, if it throws an Error, it will work! This means you can use libraries...

### Jest

- [jestjs.io](https://jestjs.io/)
- Focussed on simplicity. Simple, light and fast.
- Works with zero configuration.
- Preferred for React.
- Allows taking of snapshots of tests as alternative means of verifying units.

### Jasmine

- [jasmine.github.io](https://jasmine.github.io/)
- Supports Behavior-Driven Development (BDD).
- Preferred for frontend testing.
- Doesn't require the DOM or a browser.

### Karma

- [karma-runner.github.io](https://karma-runner.github.io/latest/index.html)
- A test runner created by the AngularJS team to suit all their needs.
- Test on real devices and browsers possible.
- Providers support for headless browser like PhantomJS.
- Supports remote testing directly from a terminal or IDE.
- See also [karma-jasmine](https://www.npmjs.com/package/karma-jasmine)
    > Adapter for the Jasmine testing framework.
- See also [https://www.npmjs.com/package/karma-typescript](https://www.npmjs.com/package/karma-typescript)
    
### Puppeteer

- [Puppeteer](https://developers.google.com/web/tools/puppeteer) docs
- [pptr.dev](https://pptr.dev/)
- Made by Google.
- For high-level browser control.
- Easy to use for automated UI tests, form submissions and keyboard inputs.
- [Using Jest with Puppeteer](https://jestjs.io/docs/en/puppeteer)


## Low-level tesing

### Assertions

- [assert](https://nodejs.org/api/assert.html) module - builtin to Node.js.
- `should.js` - BDD style shown throughout these docs
- `expect.js` - `expect()` style assertions
- [chai](https://www.chaijs.com/) - `expect()`, `assert()` and `should`-style assertions
- `better-assert` - C-style self-documenting `assert()`
- `unexpected` - “the extensible BDD assertion toolkit”


## Testing for frameworks

### React

- React Testing Library
    - [@testing-library/react](https://www.npmjs.com/package/@testing-library/react) on NPM
    - [Intro](https://testing-library.com/docs/react-testing-library/intro/) guide.
        > React Testing Library builds on top of DOM Testing Library by adding APIs for working with React components.
    - This gets used in a new `create-react-app` - see [react-quickstart](https://github.com/MichaelCurrin/react-quickstart/blob/master/package.json).
    
### Vue

- Vue Testing Library 
    - https://testing-library.com/docs/vue-testing-library/intro
    - https://github.com/testing-library/vue-testing-library
    - Guiding principle
       > The more your tests resemble the way your software is used, the more confidence they can give you
    - > we want is for this library to be pretty light-weight, simple, and understandable.
    - > You can write unit, integration, and end-to-end tests with this library.
    - Test components without relying on implementation details.
    - High-level component testing. Used Vue Test Utils internally.
    - You can't access component methods or the component instance. This is intentional. They want you to focus on testing the output and functionality of the component as it is observed by the user and to avoid worrying about the implementation details.
- Vue Test Utils (VTU)
    - https://next.vue-test-utils.vuejs.org/guide/ 
    - Low-level component testing.
    - Official Vue library.
    - If you are new to Vue, rather use Vue Testing.
    - What you can test - from https://next.vue-test-utils.vuejs.org/guide/essentials/easy-to-test
        > Notice how this list does not include elements such as internal methods, intermediate states or even data.
        >
        > The rule of thumb is that a test should not break on a refactor, that is, when we change its internal implementation without changing its behavior. If that happens, the test might rely on implementation details.
- End to End tests
    - https://v3.vuejs.org/guide/testing.html#end-to-end-e2e-testing
