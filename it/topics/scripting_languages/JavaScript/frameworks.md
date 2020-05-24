# JS Frameworks

Le strutture Javascript sono librerie (solitamente disponibili come pacchetti _npm_) che ti consentono di creare frontend animati, dinamici, interattivi e moderni utilizzando astrazioni come i componenti in modo da non dover scrivere JavaScript di basso livello.

Vedi [10 migliori framework JavaScript da utilizzare nel 2019](https://hackr.io/blog/10-best-javascript-frameworks-2019).

Di seguito sono riportati i riepiloghi di alcuni framework JavaScript popolari, inclusi collegamenti e frammenti di codice _hello world_. Il focus di questo elenco è sui framework per la creazione di app Web, sia sul frontend(rendering lato client) sia sul backend(rendering server-sider).


## React

### Perché React?

Il motivo principale è che React ha un linguaggio dichiarativo per modellare l'interfaccia utente e lo stato.

Lo scopo di React:

- Descrivere in modo dichiarativo le interfacce utente (UI) e modellare lo stato di queste interfacce.
- vale a dire, usalo descrivendo come dovrebbe essere un'interfaccia o uno stato finito e React capirà come arrivare a quello.
- Ciò consente agli sviluppatori di risparmiare molto tempo e poiché non è necessario controllare lo stato prima di apportare modifiche a livello di transazione.

Vedi [Perchè React?](https://jscomplete.com/learn/why-react) sul sito JSComplete.

### Informazioni su React

- Viene utilizzato per sviluppare un'interfaccia utente dinamica in modo che il DOM sia basato sul _client side_ - come applicazione a pagina singola (SPA).
- Questo si adatta bene per il traffico ad alto volume.
- Funziona bene con dati dinamici come la lettura o l'archiviazione da un back-end o database o l'interrogazione di altri servizi API.
- È molto popolare (la quinta libreria JS più famosa su Github) e utilizzata sui principali siti Facebook, Netflix e Khan Academy.
- React non si definisce un "framework" ma solo una "libreria". È facile da estendere, non supponente ed è modulare (puoi usare solo una parte di cui hai bisogno senza tutto).
- React è una libreria per la creazione di _user interfaces_. Se un ambiente come il browser Web può eseguire JavaScript semplice, è possibile creare un'interfaccia per esso utilizzando React.
- React verrà compilato in codice JavaScript di basso livello ottimizzato.
- React è "solo JavaScript" - sì, devi imparare l'API React ma puoi usare JavaScript semplice all'interno di React e il risultato è JavaScript. vale a dire dopo aver compilato in una directory di build, è possibile servire l'applicazione _senza_ React installato. E non devi caricare React sul lato browser, ma solo il file JavaScript in bundle (webpack aiuta a questo scopo).


### Risorse

- React sito ufficiale
	- [homepage di Reactjs.org](https://reactjs.org/).
	    > Una libreria JavaScript per la creazione di interfacce utente
	- Tutorial e guide
		- Tutorial [Introduzione a React](https://reactjs.org/tutorial/tutorial.html).
		- [Guida introduttiva](https://reactjs.org/docs/getting-started.html) guida all'installazione.
		- [Concetti principali](https://reactjs.org/docs/hello-world.html), a partire da Hello world.
		- [Presentazione di JSX](https://reactjs.org/docs/introducing-jsx.html)
- [Repository Github:facebook/react](https://github.com/facebook/react).
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


### React root

React viene eseguito su un singolo file `index.html` con un` div` come questo. A volte basta "root".

```html
<div id="react-root">
</div>
```

Sul sito di Instagram, troverai qualcosa del genere sul loro sorgente HTML:

Se disabiliti JavaScript e ricarichi la pagina, vedrai solo il logo di Instagram, poiché tutto il resto è reso da JavaScript.


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

Questo utilizza la sintassi JSX, quindi avrai bisogno della libreria React e di Babel internamente per convertirla in semplice JavaScript ed eseguirla.


### Routing

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


## React Native

### Links

- [Sito ufficiale](https://facebook.github.io/react-native/).
    > Crea app native per Android e iOS usando React.
     > Scritto in JavaScript - reso con codice nativo.
     > React Native è come React, ma utilizza componenti nativi anziché componenti Web come blocchi predefiniti.
- [Introduzione](https://facebook.github.io/react-native/docs/getting-started)
    > Questa pagina ti aiuterà a installare e creare la tua prima app React Native.
- Tutorials
    - [Impara le basi](https://facebook.github.io/react-native/docs/tutorial).
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


## Electron

- [Homepage ufficiale](https://www.electronjs.org/)
	- > Crea app desktop multipiattaforma con JavaScript, HTML e CSS
	- > Se è possibile creare un sito Web, è possibile creare un'app desktop. Electron è un framework per la creazione di applicazioni native con tecnologie web come JavaScript, HTML e CSS. Si prende cura delle parti dure in modo che tu possa concentrarti sul nucleo della tua applicazione.
- [Wikipedia](https://it.wikipedia.org/wiki/Electron_(framework)))
	- > Electron (precedentemente noto come Atom Shell) è un framework open source gestito e ospitato da GitHub. Electron consente lo sviluppo della GUI di applicazioni desktop utilizzando tecnologie Web: combina il motore di rendering Chromium e il runtime Node.js. Electron è il principale framework per la GUI dietro alcuni importanti progetti open source tra cui Atom, GitHub Desktop, Light Table, Visual Studio Code e WordPress Desktop.

## Proton Native


 - [Homepage ufficiale](https://proton-native.js.org/#/)
	 - > Creare applicazioni desktop tramite una sintassi React, su tutte le piattaforme.
  - Caratteristiche
      > - Stessa sintassi e componenti di React Native
      > - Funziona con le librerie React esistenti come Redux
      > - Piattaforma trasversale
      > - Niente più elettroni
      > - Compatibile con tutti i normali pacchetti Node.js
      > - Ricarica a caldo


## Angular

Consente l'uso di una sintassi simile all'HTML nell'applicazione e consente l'interpretazione degli attributi per l'associazione dei dati. Viene utilizzato per lo sviluppo di applicazioni a pagina singola (SPA).

È un progetto open source utilizzato da Google.

### Links

- [Sito Ufficiale](https://angular.io/).
    > Un framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) per iniziare in 5 minuti.
- [Github repo](https://github.com/angular/angular).
    > Angular è una piattaforma di sviluppo per la creazione di applicazioni Web mobili e desktop utilizzando TypeScript/JavaScript e altre linguaggi.
- Corsi
    - [Egghead](https://egghead.io/)
        - Corsi [Angular](https://egghead.io/browse/frameworks/angular).
    - [Frontend Masters](https://frontendmasters.com)
        - [Angular path](https://frontendmasters.com/learn/angular/).
- [Cheatsheet](https://angular.io/guide/cheatsheet)


### Hello world

da [AngularJS Hello World Application: Il tuo primo programma di esempio ](https://www.guru99.com/angularjs-first-program.html).

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

Un framework progressivo per la creazione di interfacce utente. Ha usato per lo sviluppo di applicazioni a pagina singola (SPA).

> A differenza di altri framework monolitici, Vue è progettato da zero per essere adottato in modo incrementale.

### Links

- [Sito ufficiale](https://vuejs.org)
- [Installazione](https://vuejs.org/v2/guide/installation.html)
- [Introduzione](https://vuejs.org/v2/guide/index.html)
- [Esempi](https://vuejs.org/v2/examples/)
- [Github repo](https://github.com/vuejs/vue)
- Video
    - _Vue.js: Il Documentario_
        - [Trailer](https://www.youtube.com/watch?v=2EmYw-O-WLI)
        - [Full](https://www.youtube.com/watch?v=OrxmtDw4pVI)
- Corsi
    - [Egghead](https://egghead.io/)
        - [Vue](https://egghead.io/browse/frameworks/vue) corsi.
    - [Frontend Masters](https://frontendmasters.com)
        - [Vue path](https://frontendmasters.com/learn/vue/).
    - [Pluralsight](https://app.pluralsight.com/)
        - [Vue path](https://app.pluralsight.com/paths/skills/vue)
    - [Scotch.io](https://scotch.io)
        - [Iniziare con Vue](https://scotch.io/courses/getting-started-with-vuejs)
- Estensioni VS Code
	- [Vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur) per l'evidenziazione della sintassi del file `.vue` e altri strumenti.
- Plugins
	- [Plugins guide](https://vuejs.org/v2/guide/plugins.html) su Vue docs. Visualizza argomenti come routing, gestione dello stato e rendering sul lato server.
	- [Vuex](https://vuex.vuejs.org/)
		- Per memorizzare e gestire lo stato. Simile a Flux o Redux of React.
	
### Hello world

In questo esempio semplificato, tutti i CSS e JS si trovano nel singolo file HTML.

Basato su [tutorial](https://scrimba.com/p/pXKqta/cQ3QVcr).

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

Puoi creare ed eseguire un'app Vue senza dipendenze locali, poiché Vue e plug-in possono essere caricati nel browser.

Tuttavia, è comune utilizzare l'interfaccia della riga di comando Vue in quanto ha molte funzionalità utili per lo sviluppo.

- [Vue CLI](https://cli.vuejs.org/) homepage.

Installa questo pacchetto NPM:

```sh
npm install -g @vue/cli
# OR
yarn global add @vue/cli
```


## Vue Native

- [vue-native.io/](https://vue-native.io/) homepage


## Vuex


Gestione dello stato per Vue, utilizzando un negozio centrale.

- [vuex.vuejs.org/](https://vuex.vuejs.org/) homepage


## Redux

Un contenitore di stato prevedibile per le app JavaScript, generalmente utilizzato per React.

> Redux mantiene lo stato di un'intera applicazione in un singolo albero di stato immutabile (oggetto), che non può essere modificato direttamente. [Fonte](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)

> Redux è una libreria JavaScript open source per la gestione dello stato dell'applicazione. È più comunemente usato con librerie come React o Angular per costruire interfacce utente. Simile (e ispirato) all'architettura Flux di Facebook, è stato creato da Dan Abramov e Andrew Clark. [Fonte](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))

È un'architettura del flusso di dati dell'applicazione, non un framework. Creato nel 2015, ispirato al Flux di Facebook e al linguaggio di programmazione funzionale Elm.

### Links

- [Homepage ufficiale](https://redux.js.org/)
    - [Getting started](https://redux.js.org/introduction/getting-started)
    - [Esempi](https://redux.js.org/introduction/examples)
- [Documentazione](https://devdocs.io/redux/)
- [Wikipedia](https://en.wikipedia.org/wiki/Redux_(JavaScript_library))
- [Un'introduzione a Redux](https://www.smashingmagazine.com/2016/06/an-introduction-to-redux/)
- Blogs
    - [Hello world su React-Redux](https://medium.com/@lavitr01051977/easy-redux-b29391b499cb) su Medium
    - [Hello world su React Redux](https://riptutorial.com/react-redux/example/22907/hello-world-using-react-redux) dal Rip Tutorial

### Esempio basilare

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


## Flux


> - Cos'è Flux?
> 	- Flux è l'architettura dell'applicazione che Facebook utilizza per creare applicazioni Web lato client.
> - Che cosa fa?
> 	- Completa i componenti della vista componibile di React utilizzando un flusso di dati unidirezionale.
> - Come lo uso?
> 	- È più un modello piuttosto che un framework formale e puoi iniziare a usare Flux immediatamente senza necessità di nuovo codice.

	- [facebook.github.io/flux/](https://facebook.github.io/flux/) homepage
		> Architettura dell'applicazione per la creazione di interfacce utente
- Messaggi
	- [Conoscere Flux, l'architettura React.js](https://scotch.io/tutorials/getting-to-know-flux-the-react-js-architecture)
		> Flux è un'architettura che Facebook utilizza internamente quando lavora con React. Non è un framework o una libreria. È semplicemente un nuovo tipo di architettura che integra React e il concetto di flusso di dati unidirezionale.
