# 📚 Risorse
> Cenni su alcune idee chiave per gli sviluppatori con collegamenti esterni per approfondire

## Come usare questa guida

Questa guida presuppone che tu abbia già delle conoscenze di programmazione e desideri fare qualcosa come:

- esplorare alcuni argomenti di cui hai sentito parlare ma di cui non sai molto. O
- imparare la tecnologia in maniera pratica e vuoi trovare alcune definizioni e spiegazioni più formali. O,
- scoprire cosa c'è da sapere e come queste cose si incastrano tra di loro.

Nella mia esperienza nei colloqui(lavorativi) di ingegneria del software (sia facendo dei colloqui sia affrontando dei colloqui), questi sono i tipi di argomenti che emergono molto e quindi conoscerli almeno a livello concettuale ti aiuterà molto.

Non è necessario conoscere effettivamente tutti questi argomenti, ma idealmente dovresti sapere quali sono la maggior parte di questi elementi e quando e perché li utilizzeresti. Laddove i collegamenti non sono forniti di seguito, è possibile cercarli da soli su Wikipedia, blog o tutorial.

## Argomenti


### 💡 Concetti di software design 

- Sistemi operativi
  	- Unix
	- Linux
	- macOS
	- Windows
- Shell
	- Bash
	- ZSH
	- PowerShell
- Functional programming
- [Programmazione orientata agli oggetti](https://en.wikipedia.org/wiki/Object-oriented_programming)
- [SOLID](https://en.wikipedia.org/wiki/SOLID) principi di programmazione orientata agli oggetti
    - Principio di responsabilità unica
    - Principio di apertura-chiusura
    - Principio di sostituzione di Liskov
    - Principio di segregazione dell'interfaccia
    - Principio di inversione di dipendenza
- Filosofia Linux 
    - [I 9 principi principali e come ti influenzano](https://opensource.com/business/15/2/how-linux-philosophy-affects-you)
    - La lista
        - Piccolo è bello
        - Ogni programma fa bene una cosa
        - Prototipo il più presto possibile
        - Scegli Portabilità piuttosto che efficienza
        - Archivia i dati in file di testo 
        - Usa la leva del software
        - Utilizzare gli script Shell per aumentare la leva e la portabilità
        - Evitare le interfacce utente Captive
        - Rendi ogni programma un filtro
- Databases
    - SQL
    - NoSQL
    - ORM
- Design applicationi Web
    - RESTful API
    - [GraphQL](GraphQL/) API
    - Model View Controller (MVC)
    - Server-side rendering (SSR)
        - Come le applicazioni PHP e Python.
    - Client-side rendering (CSR), come JavaScript Single-Page Application (SPA)
    - Single-page application
- [Ci sono solo due cose difficili nella programmazione](https://www.martinfowler.com/bliki/TwoHardThings.html)
    - invalidazione della Cache
    - Dare un nome alle cose
    - [errori Off-by-one](https://en.m.wikipedia.org/wiki/Fencepost_error)


### ↔️ Backend vs frontend

Vedi un post sul mio blog che ho scritto [qui](https://michaelcurrin.github.io/coding-blog/2020/02/20/backend-vs-frontend.html) che spiega la differenza tra queste due aree.


### 🌸 Design patterns

> Nell'ingegneria del software, un modello di progettazione del software è una soluzione generale e riutilizzabile a un problema che si verifica comunemente in un determinato contesto nella progettazione del software. Non è un progetto finito che può essere trasformato direttamente in codice sorgente o macchina. Piuttosto, è una descrizione o un modello per come risolvere un problema che può essere utilizzato in molte situazioni diverse. I modelli di progettazione sono le migliori pratiche formalizzate che il programmatore può utilizzare per risolvere problemi comuni durante la progettazione di un'applicazione o di un sistema. [Wikipedia](https://en.wikipedia.org/wiki/Software_design_pattern)

- [Design Patterns](/Scripting%20languages/Python/README.md#design-patterns) in Python.
- [Design Patterns nel Tutorial Java](https://www.tutorialspoint.com/design_pattern/index.htm) sul sito Tutorials Point - i patterns elencati nel menu della barra laterale.


### 🏟 Architettura

- [Fondamenti di Architettura del software](https://learning.oreilly.com/videos/software-architecture-fundamentals/9781491998991/9781491998991-video316989) su O’Reilly Online Learning. 9 ore di corso.

#### 🗼 Domain-driven design

- [Fondamenti di Domain-Driven Design](https://app.pluralsight.com/library/courses/domain-driven-design-fundamentals/table-of-contents) su Pluralsight. corso di 4 ore.
- [Architettura del software - Domain Driven Design](https://www.linkedin.com/learning/software-architecture-domain-driven-design/) su LinkedIn Learning. corso di 1 ora.


### 🔁 Rosetta code

[Rosetta Code](https://rosettacode.org/) sito Web che offre attività risolte in vari linguaggi per un facile confronto. Questo può essere utile se sei o non sei familiare con un linguaggio. Gli esempi tendono ad essere minimi e seguono un modello simile, ad esempio se capisci cosa sta facendo Python puoi dare un senso alla logica equivalente in Ruby o PHP.

Argomenti:

- [Hello world text](https://rosettacode.org/wiki/Hello_world/Text)
- Web
    - [Web server](https://rosettacode.org/wiki/Hello_world/Web_server) hello world
    - [Web scraping](https://www.rosettacode.org/wiki/Web_scraping)
    - [HTTPS/Auth](https://rosettacode.org/wiki/HTTPS/Authenticated)

Guarda anche, programma "Hello, world" su [Wikipedia](https://en.wikipedia.org/wiki/%22Hello,_World!%22_program).


### 📏 Sviluppo Test Driven 

- [sviluppo Test-driven](https://en.wikipedia.org/wiki/Test-driven_development) su Wikipedia.
- [kata-bootstraps](https://github.com/swkBerlin/kata-bootstraps) - Se sei interessato a scrivere unit test, potresti trovare del codice bootstrap qui per un determinato linguaggio.
- [sviluppo Test Driven (TDD): Soluzione Esempio](https://technologyconversations.com/2013/12/20/test-driven-development-tdd-example-walkthrough/) blog post.
- [Introduzione allo Sviluppo Test Driven (TDD)](http://agiledata.org/essays/tdd.html) saggio sul sito Web di Agile Data.


### 🖌 stile di programmazione

Scopri come scrivere codice che segue la style guide per il linguaggio o il progetto / team.

- [Stile di programmazione](https://en.wikipedia.org/wiki/Programming_style)
- [Perché lo stile di programmazione è importante](https://www.smashingmagazine.com/2012/10/why-coding-style-matters/) blog post
- [Guide di stili per progetti open source di origine Google](https://github.com/google/styleguide)

### 🔍 Revisione del codice

Impara a revisionare il codice di altri sviluppatori.

- [Abilità di revisione del codice per le persone](https://speakerdeck.com/nnja/code-review-skills-for-people) slide deck.
- [Revisione del codice](https://github.com/features/code-review/) guida alle funzionalità di Github.
<!--stackedit_data:
eyJoaXN0b3J5IjpbMTM2NTM4NTcxOSwtMTAzMTA4MTgyMF19
-->
