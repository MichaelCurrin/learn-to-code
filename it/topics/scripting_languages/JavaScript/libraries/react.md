# React

## Perché React?

Il motivo principale è che React ha un linguaggio dichiarativo per modellare l'interfaccia utente e lo stato.

Lo scopo di React:

- Descrivere in modo dichiarativo le interfacce utente (UI) e modellare lo stato di queste interfacce.
- vale a dire, usalo descrivendo come dovrebbe essere un'interfaccia o uno stato finito e React capirà come arrivare a quello.
- Ciò consente agli sviluppatori di risparmiare molto tempo e poiché non è necessario controllare lo stato prima di apportare modifiche a livello di transazione.

Vedi [Perchè React?](https://jscomplete.com/learn/why-react) sul sito JSComplete.

## Informazioni su React

- Viene utilizzato per sviluppare un'interfaccia utente dinamica in modo che il DOM sia basato sul _client side_ - come applicazione a pagina singola (SPA).
- Questo si adatta bene per il traffico ad alto volume.
- Funziona bene con dati dinamici come la lettura o l'archiviazione da un back-end o database o l'interrogazione di altri servizi API.
- È molto popolare (la quinta libreria JS più famosa su GitHub) e utilizzata sui principali siti Facebook, Netflix e Khan Academy.
- React non si definisce un "framework" ma solo una "libreria". È facile da estendere, non supponente ed è modulare (puoi usare solo una parte di cui hai bisogno senza tutto).
- React è una libreria per la creazione di _user interfaces_. Se un ambiente come il browser Web può eseguire JavaScript semplice, è possibile creare un'interfaccia per esso utilizzando React.
- React verrà compilato in codice JavaScript di basso livello ottimizzato.
- React è "solo JavaScript" - sì, devi imparare l'API React ma puoi usare JavaScript semplice all'interno di React e il risultato è JavaScript. vale a dire dopo aver compilato in una directory di build, è possibile servire l'applicazione _senza_ React installato. E non devi caricare React sul lato browser, ma solo il file JavaScript in bundle (webpack aiuta a questo scopo).


## Risorse

- React sito ufficiale
	- [homepage di Reactjs.org](https://reactjs.org/).
	    > Una libreria JavaScript per la creazione di interfacce utente
	- Tutorial e guide
		- Tutorial [Introduzione a React](https://reactjs.org/tutorial/tutorial.html).
		- [Guida introduttiva](https://reactjs.org/docs/getting-started.html) guida all'installazione.
		- [Concetti principali](https://reactjs.org/docs/hello-world.html), a partire da Hello world.
		- [Presentazione di JSX](https://reactjs.org/docs/introducing-jsx.html)
- [Repository GitHub:facebook/react](https://github.com/facebook/react).
    > Una libreria JavaScript dichiarativa, efficiente e flessibile per la creazione di interfacce utente.
- [Pacchetto NPM: react](https://www.npmjs.com/package/react)
- Tutorial
- Sito Web [Styled Components](https://styled-components.com/docs) - guida allo stile delle tue app React.js senza stress.
- [Reaxt Beyond The Basics](https://jscomplete.com/learn/react-beyond-basics/introduction). Nota la sezione "React problemi comuni" se sei un principiante alle prese con la sintassi JavaScript.
- Corsi
    - [Egghead](https://egghead.io/)
        - Corsi [React](https://egghead.io/browse/frameworks/react).
    - [Frontend Masters](https://frontendmasters.com/)
        - [React path](https://frontendmasters.com/learn/react/).
    - [Pluralsight](https://app.pluralsight.com/) (richiede un abbonamento)
        - [React path](https://app.pluralsight.com/paths/skill/react).
        - [Un inizio pratico con React](https://app.pluralsight.com/library/courses/react-practical-start/table-of-contents)
        - [React: Getting Started](https://app.pluralsight.com/library/courses/react-js-getting-started/table-of-contents)
        - [React Fundamentals](https://app.pluralsight.com/library/courses/react-fundamentals-update/table-of-contents)
        - [Advanced React.js](https://app.pluralsight.com/library/courses/reactjs-advanced/table-of-contents)
    - [Scotch.io](https://scotch.io/) (corsi gratuiti)
        - [Introduzione a React](https://scotch.io/starters/react/getting-started-with-react-2019-edition?ref=home-start-here)


## React root

React viene eseguito su un singolo file `index.html` con un` div` come questo. A volte basta "root".

```html
<div id="react-root">
</div>
```

Sul sito di Instagram, troverai qualcosa del genere sul loro sorgente HTML:

Se disabiliti JavaScript e ricarichi la pagina, vedrai solo il logo di Instagram, poiché tutto il resto è reso da JavaScript.


## Hello world

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

Questo utilizza la sintassi JSX, quindi avrai bisogno della libreria React e di Babel internamente per convertirla in semplice JavaScript ed eseguirla.


## Routing

Se aggiungi la libreria di React Router puoi gestire facilmente il passaggio tra i percorsi del browser. Ecco una guida rapida per questo.

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
