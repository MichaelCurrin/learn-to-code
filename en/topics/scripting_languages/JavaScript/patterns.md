# Patterns
> Libraries to extend other libraries or frameworks

See the [Frameworks](frameworks.md) page if you are looking for React or Vue.


## Vue-based

## Vuex

State management for Vue, using a central store. This is not so much a framework as a library to extend Vue.

- [vuex.vuejs.org/](https://vuex.vuejs.org/) homepage.

---

## React-based

### Redux

A predictable state container for JavaScript apps - typicall React. This is not so much a framework as a library to extend React.

> Redux maintains the state of an entire application in a single immutable state tree (object), which can’t be changed directly. [source](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)

> Redux is an open-source JavaScript library for managing application state. It is most commonly used with libraries such as React or Angular for building user interfaces. Similar to (and inspired by) Facebook's Flux architecture, it was created by Dan Abramov and Andrew Clark. [source](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))

It is an application data-flow architecture, not a framework. Created in 2015, inspired by Facebook's Flux and functional programming language Elm.

#### Resources

- [Official homepage](https://redux.js.org/)
    - [Getting started](https://redux.js.org/introduction/getting-started)
    - [Examples](https://redux.js.org/introduction/examples)
- [Docs](https://devdocs.io/redux/)
- [Wikipedia](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))
- [An introduction to Redux](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)
- Blogs
    - [Hello world in React-Redux](https://medium.com/@lavitr01051977/easy-redux-b29391b499cb) on Medium
    - [Hello world in React Redux](https://riptutorial.com/react-redux/example/22907/hello-world-using-react-redux) from Rip Tutorial

#### Basic example

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


### Flux

Flux is a pattern for managing your architecure in React. It is similar to Redux.

From the homepage:

> - What is Flux?
> 	- Flux is the application architecture that Facebook uses for building client-side web applications.
> - What does it do?
> 	- It complements React's composable view components by utilizing a unidirectional data flow.
> - How do I use it?
>	- It's more of a pattern rather than a formal framework, and you can start using Flux immediately without a lot of new code.

#### Resources

- [facebook.github.io/flux/](https://facebook.github.io/flux/) homepage.
	> Application architecture for building user interfaces
- Posts
	- [Getting To Know Flux, the React.js Architecture](https://scotch.io/tutorials/getting-to-know-flux-the-react-js-architecture)
		> Flux is an architecture that Facebook uses internally when working with React. It is not a framework or a library. It is simply a new kind of architecture that complements React and the concept of Unidirectional Data Flow.
- [What is Flux?)(http://fluxxor.com/what-is-flux.html) on Fluxxor site.
