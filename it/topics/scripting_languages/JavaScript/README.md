# JavaScript


- [Che cos'è JavaScript?](#che-cosè-javascript)
    - [Cosa puoi fare con JavaScript](#cosa-puoi-fare-con-javascript)
    - [Perché imparare JavaScript - 5 buoni motivi](#Perché-imparare-JavaScript---5-buoni-motivi)
- [Come eseguire](#Come-eseguire)
    - [Browser](#browser)
    - [Riga di comando](#riga-di-comando)
- [Esegui file di progetto](#esegui-file-di-progetto)
    - [Scripts](#scripts)
    - [Demo HTML](#demo-html)
- [Risorse](#risorse)
    - [Strumenti da riga di comando](#Strumenti-da-riga-di-comando)
- [Librerie](#librerie)
    - [Convenienza](#convenienza)
    - [Librerie di template](#librerie-di-template)
    - [Librerie Dataviz](#librerie-dataviz)
    - [Frameworks](#frameworks)
- [CDNs](#cdns)


## Che cos'è JavaScript?

> - JavaScript è il linguaggio di programmazione per il Web
> - JavaScript può aggiornare e modificare sia HTML che CSS
> - JavaScript può calcolare, manipolare e convalidare i dati - [fonte](https://www.w3schools.com/whatis/whatis_js.asp)

JavaScript è stato progettato per eseguire un ambiente host come il browser, con il supporto aggiunto successivamente come "Node" per essere eseguito in un ambiente autonomo come fanno molte altre lingue. Ciò avviene attraverso modifiche (aggiornamenti) al [Document Object Model](https://en.m.wikipedia.org/wiki/Document_Object_Model) o _DOM_, che rappresenta una struttura ad albero di elementi nella pagina. Il DOM potrebbe inizialmente corrispondere al codice HTML iniziale recuperato e che può essere visto con Visualizza sorgente, ma quando i contenuti cambiano dovrai guardare il DOM negli strumenti di sviluppo del tuo browser.

Nel browser JavaScript si occupa del comportamento (interattività) dell'esperienza, mentre HTML gestisce il contenuto e CSS è lo stile. JavaScript ti permette di leggere e manipolare la pagina per renderla dinamica. Come tirare le foto mentre un utente scorre, aggiungere uno stile o una classe CSS a un elemento su una condizione, creare un pop-up quando viene soddisfatta una condizione o persino creare un gioco.

Mentre JavaScript esiste in genere come script direttamente sulla pagina o inserito come file autonomo, non è necessaria una connessione Internet per eseguire JavaScript. Come viene eseguito sul browser, indipendentemente dal server che inizialmente ha inviato HTML e JavaScript. Tuttavia, potresti riscontrare ridotte funzionalità o errori, in particolare in merito alla creazione o alla lettura di contenuti sul server come immagini, post o dettagli dell'utente.

Le origini di JavaScript sono trattate [qui](https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript).


### Cosa puoi fare con JavaScript

Ecco alcuni casi tipici per JavaScript. Alcuni sono nel browser, altri sul lato server, altri sono entrambi.

- rendere dinamica una pagina Web (recupero e caricamento dei dati, convalida e transizioni)
- single-page application
- server web
- API
- game design
- mobile apps
- machine learning
- web scraping
- automazione (recupero, trasformazione ed esportazione di dati CSV, JSON o database)


### Perché imparare JavaScript - 5 buoni motivi

Riassunto dall'articolo [qui](https://medium.com/duomly-blockchain-online-courses/why-learn-javascript-5-good-reasons-42aa0d021b4f).

1. Iniziale facilità di apprendimento  
2. Grandi opportunità di carriera
3. Ampia gamma di utilizzo
4. Una grande comunità
5. Molte fonti da cui imparare


## Come eseguire


### Browser

Se hai un browser installato, puoi già eseguire JavaScript attraverso pagine web che eseguono script.

Oppure tramite la console: apri il pannello degli strumenti di sviluppo dalle impostazioni o fai clic con il pulsante destro del mouse sulla pagina e fai clic su Ispeziona elemento e cerca la scheda _Console_.

Vai a [browser_usage](browser_usage.md).

### Riga di comando

Se si desidera eseguire JavaScript nella riga di comando, consultare questi documenti:

- [Node](node.md)
- [Pacchetti di nodi](node_packages.md) - copre NPM e NVM.


## Esegui file di progetto

### Scripts

Vedi la directory [scripts](/en/topics/scripting_languages/JavaScript/scripts).

Puoi eseguire i file `.js` lì usando le istruzioni seguenti, se hai [node](node.md) installato.

```Sh
$ cd <PATH_TO_REPO>
$ cd en/topics/scripting_languages/JavaScript/scripts
$ node basics/iteration.js
```

### Demo HTML

Vedi la directory [html_demos](en/topics/scripting_languages/JavaScript/html_demos).

Avviare un server Web in quella directory o utilizzare le estensioni del server live di VS Code.

Nota che non puoi semplicemente aprire prima una pagina HTML nel tuo browser senza un server, altrimenti JS non verrà eseguito.

## Risorse

- [JavaScript](https://en.wikipedia.org/wiki/JavaScript) su Wikipedia.
    > JavaScript, spesso abbreviato in JS, è un linguaggio di programmazione multi-paradigma compilato just-in-time e conforme alle specifiche ECMAScript.
- Node
    - Esegui JavaScript sul server, come script back-end o per compilare applicazioni front-end.
    - Guarda la documentazione di [Node](node.md).
- Tutorial
    - [JavaScript.com](https://www.javascript.com/) di [Pluralsite](https://www.pluralsight.com/)
    - [Che cos'è JavaScript?](Https://www.w3schools.com/whatis/whatis_js.asp) avvio rapido su W3 Schools.
    - [tutorial JS](https://www.w3schools.com/js/default.asp) su W3 Schools.
    - Documenti Mozilla
        - [Tutorials](https://developer.mozilla.org/en-US/docs/Web/JavaScript#Tutorials). Vedi anche su quella pagina _Strumenti e risorse_.
        - [Una reintroduzione a JavaScript (tutorial JS)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript). Questo inizia con le basi.
- Documenti
    - documentazione [JavaScript](https://devdocs.io/javascript/) su [devdocs.io](https://devdocs.io/).
    - documentazione [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) su [developer.mozilla.org](https://developer.mozilla.org/). Include guide per utenti principianti, intermedi e avanzati e anche riferimenti alle funzioni.
        - [Riferimento](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference)
        - [Classes](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes)
- Corsi
    - [Scotch.io](https://scotch.io)
        - [Introduzione a JavaScript](https://scotch.io/courses/getting-started-with-javascript-for-web-development?ref=home-start-here)
- IDE online
    - [Runkit](https://runkit.com/home)
      > Runkit è un parco giochi node nel tuo browser.
      > ... puoi richiedere qualsiasi pacchetto npm all'istante.
    - [NPM Runkit](https://npm.runkit.com/) ad esempio https://npm.runkit.com/request
    - CodePen [JS Console](https://codepen.io/idesi/pen/rLgaJO) ed esistenti [penne con tag JavaScript](https://codepen.io/tag/javascript/).


### Strumenti da riga di comando

Riferimento rapido di collegamenti per facilitare l'installazione e l'uso degli strumenti della CLI relativi a JavaScript.

- NodeJS
    - [Homepage](https://nodejs.org/)
    - [Informazioni](https://nodejs.org/en/about/)
    - [Scarica](https://nodejs.org/en/download/)
    - [Versioni](https://nodejs.org/en/about/releases)
    - Passa alla sezione [NodeJS](#nodejs).
- NPM (Node Package Manager)
    - [Homepage](npmjs.com/)
    - [Informazioni](https://www.npmjs.com/about)
    - [Documenti](https://docs.npmjs.com/)
- Yarn
    - [Homepage](https://classic.yarnpkg.com/)
- Webpack
    - [Homepage](https://webpack.js.org/)
- ESLint
    - [Homepage](https://eslint.org/)
    - [Guida introduttiva](https://eslint.org/docs/user-guide/getting-started)
    - [Configurazione](https://eslint.org/docs/user-guide/configuring)
    - [CLI](https://eslint.org/docs/user-guide/command-line-interface)
    - [Regole](https://eslint.org/docs/rules/)


## Librerie

Le librerie JavaScript possono essere caricate ed eseguite nel browser e anche sulla riga di comando. Spesso possono essere eseguiti su entrambi, anche se potresti avere vantaggi limitati eseguendo il codice back-end in un browser o cercando di creare un front-end senza browser in cui visualizzarlo.

### Convenienza

- jQuery
    - Ampiamente usato, poiché jQuery semplifica l'esecuzione di azioni come la selezione e l'aggiornamento di elementi o il recupero di risorse, utilizzando il codice luce.
    - il JavaScript eseguito internamente da jQuery funziona perfettamente su tutti i browser (che hanno ciascuno la propria implementazione di come funzionano le cose in JS). Quindi non devi preoccuparti di questo.
    - [Pagina ufficiale](https://jquery.com/)
        -> The Write Less, Do More, Libreria JavaScript
        - La homepage mostra esempi di utilizzo.
    - [Wikipedia](https://en.wikipedia.org/wiki/JQuery)
        -> jQuery è una libreria JavaScript progettata per semplificare l'attraversamento e la manipolazione dell'albero HTML DOM, nonché la gestione degli eventi, l'animazione CSS e Ajax.
    - [Scarica](https://jquery.com/download/).
    - [API](https://api.jquery.com/) nella documentazione.
    - Tutorial
        -  W3 Schools
            - [Inizia](https://www.w3schools.com/jquery/jquery_get_started.asp).
            - [jQuery](https://www.w3schools.com/jquery/default.asp).
            - [Tutorial](https://www.w3schools.com/jquery/). La barra laterale copre i casi d'uso comuni.
        - [Domande frequenti su jQuery](https://www.tutorialrepublic.com/faq.php#javascript-jquery) su un sito Web tutorial
- ListJS
    - [listjs.com](https://listjs.com)
        > JavaScript vanilla piccolo, invisibile e semplice, ma potente e incredibilmente veloce che aggiunge ricerca, ordinamento, filtri e flessibilità a semplici elenchi HTML, tabelle o altro.
    - Aggiungi ricerca, ordina e filtra per la tua pagina HTML.


### Librerie di template

- Moustache JS
    - [Pagina ufficiale](https://mustache.github.io/)
        > Modelli Logic-less.
    - Modello HTML lato server o browser.
    - [npm](https://www.npmjs.com/package/mustache)
    - [Cloudfare CDN](https://cdnjs.com/libraries/mustache.js/)
- Handlebars JS
    - [Pagina ufficiale](https://handlebarsjs.com/)
        > Templating minimo sugli steroidi
    - [npm](https://www.npmjs.com/package/handlebars)
    - [Github repo](https://github.com/wycats/handlebars.js)

### Librerie Dataviz

- [D3.js](https://d3js.org/)
- [ApexCharts.js](https://apexcharts.com/)
- [Highcharts](https://www.highcharts.com/)
- roughViz
    - [jwilber / roughViz](https://github.com/jwilber/roughViz) su Github.
    - [roughviz](https://pypi.org/project/roughviz/) come pacchetto _Python_.
    - [Tutorial](https://medium.com/better-programming/visualize-your-data-with-hand-drawn-charts-with-the-roughviz-charting-library-a3a9f3ee4f84) post del blog.

### Frameworks

Vedi il documento [JS Frameworks](frameworks.md) in questo progetto per i framework JS frontend e backend.


## CDNs

Reti per la distribuzione di contenuti ([Wikipedia](https://en.wikipedia.org/wiki/Content_delivery_network)) dove è possibile scaricare le librerie.

- CloudFare
    - Pagina iniziale [cdnjs.com/](https://cdnjs.com/)
    - Ad esempio [cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js)
- Unpkg
    - Pagina iniziale [unpkg.com/](https://unpkg.com/)
    - Ad es. [unpkg.com/jquery@3.4.1/dist/jquery.js](https://unpkg.com/jquery@3.4.1/dist/jquery.js)
