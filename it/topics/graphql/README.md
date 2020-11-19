# GraphQL

<img width="100px" src="https://raw.githubusercontent.com/graphql/graphql-spec/master/resources/GraphQL%20Logo.svg?sanitize=true">
<!-- Link all'immagine da Wikipedia icon: https://en.wikipedia.org/wiki/GraphQL -->

## Che cos'è GraphQL?

GraphQL è una specifica per la richiesta e la restituzione di risorse che utilizzano una richiesta API a un singolo endpoint che restituisce solo gli oggetti e i campi richiesti nella query e in un modo che segue la struttura dei dati della query.

Include funzionalità che lo rendono flessibile come variabili (parametri sostituiti nella query), impaginazione e anche convalida di schemi e tipi

È stato creato da Facebook intorno al 2012 e molti servizi stanno migrando dall'uso di un'API REST all'API GraphQL per facilitare la manutenzione dell'API GraphQL e il consumo dei dati.


GraphQL stesso è solo una **specifica** che può essere implementata - non è un database o un linguaggio di programmazione o query.

Da [graphql.org/](https://graphql.org/):

> GraphQL è un linguaggio di query per le API e un runtime per soddisfare tali query con i dati esistenti. GraphQL fornisce una descrizione completa e comprensibile dei dati nella tua API, offre ai clienti il potere di chiedere esattamente ciò di cui hanno bisogno e niente di più, facilita l'evoluzione delle API nel tempo e abilita potenti strumenti di sviluppo.

Da [Wikipedia](https://en.wikipedia.org/wiki/GraphQL)
> GraphQL è un linguaggio di manipolazione e query di dati open source per le API e un runtime per la realizzazione di query con dati esistenti. [2] GraphQL è stato sviluppato internamente da Facebook nel 2012 prima di essere rilasciato pubblicamente nel 2015

Guarda questo post sul blog - [Cos'è GraphQL e perché dovrei preoccuparmene](https://medium.com/@javier.ramos1/what-is-graphql-and-why-should-i-care-914138ea039c).

## Come usarlo

### Serve data

GraphQL è spesso implementato come una libreria in linguaggi come Ruby, Python o Node. È quindi possibile installare e importare quella libreria per fungere da server GraphQL per richieste locali o di rete, simile a un'API REST.

Un server GraphQL può utilizzare qualsiasi cosa come origine dati: un database SQL o NoSQL, un file statico o persino fungere da wrapper che punta ad API REST esterne.

I dati vengono restituiti come JSON. La struttura è dinamica: si basa sulla query di input dell'utente. Quindi gli oggetti possono essere nidificati e impaginati.

### Richiesta come client

Puoi utilizzare GraphQL in vari modi sul lato client.

- Esegui una richiesta POST utilizzando uno strumento da riga di comando come `curl`. Alcune API necessitano di un token di autenticazione da fornire per l'accesso a determinati dati.
- Usa un explorer [GraphiQL](https://github.com/graphql/graphiql#graphiql) sul server (se previsto) per facilitare l'invio di query e parametri (variabili) nell'interfaccia del browser. Con ulteriori vantaggi interattivi come suggerimenti sul tipo, completamento automatico, formattazione automatica, linting e guida sul modello di schema.
- Applicazione Web (HTML + JavaScript) o applicazione mobile (Android / iOS)
    - Fai una richiesta e poi mostra i dati sul frontend. La custodia originale per GraphQL che trasmette il newsfeed di Facebook per l'app iOS di Facebook.
    - librerie
        - È possibile utilizzare una **libreria** di richieste generali per una richiesta POST all'endpoint GraphQL (utilizzando il testo della query e i parametri optionap come payload di dati).
        - Oppure è possibile utilizzare una libreria client GraphQL più specializzata per funzionalità aggiuntive come la gestione degli errori e la convalida dello schema (verificare che la query sia valida prima di eseguire la richiesta).


## Risorse

- [graphql.org](https://graphql.org/) homepage
- _GraphQL: il documentario_
    - Guardalo su [Youtube](https://www.youtube.com/watch?v=783ccP__No8) oppure [Honeypot.io](https://videos.honeypot.io/graphql-documentary-2019/)
    - Questo copre la storia di GraphQL a partire da Facebook, intorno al 2012, quando hanno dovuto tenere il passo con un grande spostamento del loro pubblico verso il mobile.
    - Consiglio vivamente questo video agli sviluppatori frontend in quanto semplifica notevolmente le query API in React e nelle app mobili. O chiunque cerchi di creare un'API REST o GraphQL.
- Tutorials
    - [graphql.org](graphql.org/)
        - [Introduzione a GraphQL](https://graphql.org/learn/)
        - [Tutorials](https://www.graphql.com/tutorials/) su argomenti generali, server e client.
            > Questa è la tua guida allo studio di GraphQL. Scopri i fondamenti di schemi e query, quindi implementa alcune app con esercitazioni pratiche dettagliate.
    - [Come creare un'app Web con GraphQL e React React](https://www.sitepoint.com/how-to-build-a-web-app-with-graphql-and-react/) su Sitepoint.
- Corsi
    - [GraphQL con React](https://www.udemy.com/course/graphql-with-react-course) su [Udemy](www.udemy.com).
    - [Frontend Masters](https://frontendmasters.com)
        - [Client-side GraphQL con React](https://frontendmasters.com/courses/client-graphql-react/)
    - [Come usare GraphQL](https://www.howtographql.com/)
        - [Introduzione](https://www.howtographql.com/basics/0-introduction/) Corso introduttivo sui fondamenti.
        - Vedi anche il loro menu per argomenti come GraphQL avanzato, corsi frontend o backend.
    - [API scalabili GraphQL](https://www.pluralsight.com/courses/graphql-scalable-apis) su PluralSight

## Librerie

### Python

- [strawberry-graphql/strawberry](https://github.com/strawberry-graphql/strawberry) su GitHub. Libreria GraphQL per Python.

### Ruby

- [github/graphql-client](https://github.com/github/graphql-client) - un esempio nella documentazione che usa l'API di Star Wars. Nota: questa gemma richiede la versione di Ruby  `2.4.4` o successiva.
- [rmosolgo/graphql-ruby](https://github.com/rmosolgo/graphql-ruby)
