
# Vue

Un framework progressivo per la creazione di interfacce utente. Ha usato per lo sviluppo di applicazioni a pagina singola (SPA).

> A differenza di altri framework monolitici, Vue è progettato da zero per essere adottato in modo incrementale.

## Links

- [Sito ufficiale](https://vuejs.org)
- [Installazione](https://vuejs.org/v2/guide/installation.html)
- [Introduzione](https://vuejs.org/v2/guide/index.html)
- [Esempi](https://vuejs.org/v2/examples/)
- [GitHub repo](https://github.com/vuejs/vue)
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

## Hello world

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

## CLI

Puoi creare ed eseguire un'app Vue senza dipendenze locali, poiché Vue e plug-in possono essere caricati nel browser.

Tuttavia, è comune utilizzare l'interfaccia della riga di comando Vue in quanto ha molte funzionalità utili per lo sviluppo.

- [Vue CLI](https://cli.vuejs.org/) homepage.

Installa questo pacchetto NPM:

```sh
npm install -g @vue/cli
# OR
yarn global add @vue/cli
```
