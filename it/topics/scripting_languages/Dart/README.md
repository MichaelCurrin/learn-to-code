# Dart


## Che cos'è Dart?

> Dart è un linguaggio ottimizzato per client per velocizzare le app  su qualsiasi piattaforma - [dart.dev](https://dart.dev)


Dart è un linguaggio di programmazione multi-paradigma sviluppato da Google avviato nel 2011. Ti consente di utilizzare un unico codice per creare un'app Web, un'applicazione desktop e un'app Android/iOS. La sua sintassi è simile o C o JavaScript.


## Risorse

### Dart

- Dart [Sito ufficiale](https://dart.dev/)
- [Pagina Wikipedia](https://it.wikipedia.org/wiki/Dart_(linguaggio))
    > Dart è un linguaggio di programmazione ottimizzato per il cliente [chiarimento necessario] per le app su più piattaforme. È sviluppato da Google e viene utilizzato per creare applicazioni mobili, desktop, back-end e Web.
    > Dart è un linguaggio orientato agli oggetti, definito in classe, immondizia, che utilizza una sintassi di tipo C che si traspone facoltativamente in JavaScript. Supporta interfacce, mixin, classi astratte, generici reificati, tipizzazione statica e un sistema di tipi sonori.

- supporto [Piattaforma Web](https://dart.dev/web) 
    > Dart supporta il Web come una delle sue piattaforme principali. I compilatori Dart-to-JavaScript sono disponibili sia per lo sviluppo (con un rapido ciclo di modifica-aggiornamento) sia per la produzione (con particolare attenzione alla dimensione e alla velocità del codice).
    > 
    > Oltre ai compilatori, la piattaforma Web Dart fornisce librerie di base, accesso al DOM (Document Object Model) e interoperabilità per la chiamata di JavaScript da Dart.
    
    - Tutorial
    - [Tutorials ufficiale di dart](https://dart.dev/tutorials)
    - [Web app quickstart](https://dart.dev/tutorials/web/get-started). 
Include le istruzioni di installazione.
    - [tour del linguaggio Dart](https://dart.dev/guides/language/language-tour)
    - [tour delle librerie di Dart](https://dart.dev/guides/libraries/library-tour)
    - [Connetti Dart e HTML](https://dart.dev/tutorials/web/low-level-html/connect-dart-html) web tutorial.
    - [I migliori Tutorial per imparare Dart costruendo Applicazioni](https://medium.com/quick-code/top-tutorials-to-learn-dart-to-build-applications-262b946a3fc9)
- Dart [samples](https://dart.dev/samples) - questi sono stati copiati in questo progetto per la sezione di base.
- Pacchetti Dart su [pub.dev](https://pub.dev/). Questi sono separati in flutter e pacchetti web.
- [IDEs Consigliati](https://dart.dev/tools#ides-and-editors) per Dart
    - supporto VS Code 
        - [Setup](https://dart.dev/tools/vs-code) di Dart.
        - plugin di [Dart](https://marketplace.visualstudio.com/items?itemName=Dart-Code.dart-code).
        - plugin di [Dart (Syntax Highlighting Only)](https://marketplace.visualstudio.com/items?itemName=oscarcs.dart-syntax-highlighting-only).

### Flutter

- Flutter [Sito ufficiale](https://flutter.dev)
    > Flutter è il toolkit dell'interfaccia utente di Google per la creazione di splendide applicazioni compilate in modo nativo per dispositivi mobili, Web e desktop da un'unica base di codice.
- [supporto Web per Flutter](https://flutter.dev/web)
- [Wikipedia](https://it.wikipedia.org/wiki/Flutter_(software)).
    >Flutter è un framework open-source creato da Google per la creazione di interfacce native per iOS e Android, oltre ad essere il metodo principale per la creazione di applicazioni per Google Fuchsia.
    > Le app Flutter sono scritte in Dart e utilizzano molte delle funzionalità più avanzate del linguaggio.
- [Flutter](https://www.youtube.com/channel/UCwXdFgeE9KYzlDdR7TG9cMw) canale Youtube
- Blog
    - [Codepen supporta Flutter](https://medium.com/flutter/announcing-codepen-support-for-flutter-bb346406fe50)


## Installazione

### Web


Per le applicazioni web, da riga di comando e server Dart, vai su [Ottieni l'SDK Dart](https://dart.dev/get-dart).

### Mobile

Per lo sviluppo di app mobili, vai a [Installa Flutter](https://flutter.dev/docs/get-started/install).


## Run


Ci sono script nella directory [Basics](Basics) copiati dagli esempi di Dart. Sono principalmente a scopo dimostrativo delle funzionalità Dart, quindi alcune di esse genereranno errori.

Guarda la [Dark SDK Overview](https://dart.dev/tools/sdk) e le sottosezioni per i dettagli sui vari modi per eseguire Dart.

### Esegui lo script da riga di comando

```bash
$ dart --enable-asserts test.dart
```

### Avviare il server

Come avviare un server applicazioni Dart. Vedi i collegamenti per guide introduttive ed esercitazioni.

- [Command-line & server apps](https://dart.dev/server)
    ```bash
    $ dart bin/main.dart
    ```
- [Web apps](https://dart.dev/web)
    ```bash
    $ webserve dev
    ```
