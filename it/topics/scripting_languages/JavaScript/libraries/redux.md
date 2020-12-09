# Redux

Un contenitore di stato prevedibile per le app JavaScript, generalmente utilizzato per React.

> Redux mantiene lo stato di un'intera applicazione in un singolo albero di stato immutabile (oggetto), che non può essere modificato direttamente. [Fonte](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)

> Redux è una libreria JavaScript open source per la gestione dello stato dell'applicazione. È più comunemente usato con librerie come React o Angular per costruire interfacce utente. Simile (e ispirato) all'architettura Flux di Facebook, è stato creato da Dan Abramov e Andrew Clark. [Fonte](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))

È un'architettura del flusso di dati dell'applicazione, non un framework. Creato nel 2015, ispirato al Flux di Facebook e al linguaggio di programmazione funzionale Elm.

## Links

- [Homepage ufficiale](https://redux.js.org/)
    - [Getting started](https://redux.js.org/introduction/getting-started)
    - [Esempi](https://redux.js.org/introduction/examples)
- [Documentazione](https://devdocs.io/redux/)
- [Wikipedia](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))
- [Un'introduzione a Redux](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)
- Blogs
    - [Hello world su React-Redux](https://medium.com/@lavitr01051977/easy-redux-b29391b499cb) su Medium
    - [Hello world su React Redux](https://riptutorial.com/react-redux/example/22907/hello-world-using-react-redux) dal Rip Tutorial

## Esempio basilare

```javascript
import { createStore } from 'redux'

/**
 * Questo è un riduttore, una funzione pura con (stato, azione) => firma dello stato.
 * Descrive come un'azione trasforma lo stato nello stato successivo.
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
// L'unico modo per mutare lo stato interno è inviare un'azione.
store.dispatch({ type: 'INCREMENT' })
// 1
store.dispatch({ type: 'INCREMENT' })
// 2
store.dispatch({ type: 'DECREMENT' })
// 1
```
