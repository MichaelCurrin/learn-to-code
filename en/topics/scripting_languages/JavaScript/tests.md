# Tests

See [Test Frameworks](https://michaelcurrin.github.io/dev-resources/resources/javascript/test-frameworks/) under Dev Resources.


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

Both of these seem focussed on testing components and not views. 

And also focus on behavior and not implementation details. 

What is missing is how I set up a unit test for testing a method alone in component or a view. Note that if the method changes state on the instance, then the scope goes beyond just the method and this becomes harder to test. And then you have to considered mounting / rendering and not just calling a method.
Perhaps testing is a method is not allowed or desirable according to both libraries. Still, how do I test a method or computed method with no side effects? Put it outside the instance? Even put it outside the .vue file and in a plain JS file?

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
