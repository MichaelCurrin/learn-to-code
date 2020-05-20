# NodeJS
> JavaScript lato server

Questa guida illustra come installare NodeJS ed eseguire NodeJS.

## About

NodeJS è un modo per eseguire JavaScript sul server anziché nel browser. Ciò consente di eseguire operazioni come semplici script nella riga di comando, strumenti di automazione, giochi e server Web che comunicano con un database.

- Pagina [NodeJS](https://en.wikipedia.org/wiki/Node.js) su Wikipedia.
    > Node.js è un ambiente runtime JavaScript open source e multipiattaforma che esegue codice JavaScript all'esterno di un browser.
- Repository: [nodejs/node](github.com/nodejs/node)
- Versione iniziale: 2009


## Installazione

Installa NodeJS usando [gist](https://gist.github.com/MichaelCurrin/aa1fc56419a355972b96bce23f3bccba).

Vedi la guida[NPM (Node Package Manager)](node_packages.md#npm) guide.


## Esegui
> Come eseguire il codice NodeJS

### Console interattiva

Avvia la console interattiva.

```sh
$ node
```
```
Benvenuto in Node.js v12.1.0.
Digita ".help" per ulteriori informazioni.
>
```

Immettere i comandi e premere Invio.

Per esempio:

```javascript
> console.log('Ciao!');
```

Premi `CTRL`+`D` per uscire dalla console.


### Esegui lo script con Node

Usa il comando `node` e il percorso di uno script.

Ad esempio, crea uno script.

```sh
$ echo 'console.log("Ciao!");' > hello.js
```

Quindi eseguilo:

```sh
$ node hello.js
```

### Esegui script con Node implicito

Crea uno script simile al precedente, ma usando `#!/Usr/bin/env node` all'inizio e con permessi eseguibili.

```sh
$ echo '#!/usr/bin/env node\nconsole.log("Ciao!");' > hello_executable.js
$ chmod +x hello_executable.js
```

Quindi eseguilo:

```sh
./hello_executable.js
```


### Esegui lo script con NPM

Puoi eseguire un codice arbitrario usando `npm`. Se aggiungi un file `package.json` nel tuo progetto (tipico per i progetti Node), puoi aggiungere elementi alla sezione` `script ''. Questi possono essere qualsiasi comando di shell, come usare Bash, Node o NPM per eseguire un'attività.


Quindi eseguili dalla riga di comando utilizzando uno degli approcci seguenti.

Utilizzare [run-script](https://docs.npmjs.com/cli/run-script).

```sh
# Elenca i comandi disponibili.
$ npm run
```

```sh
$ npm run COMMAND

# Forma più lunga
$ npm run-script COMMAND
```

Utilizzo di [npm-run](https://www.npmjs.com/package/npm-run)

```sh
$ npm-run COMMAND
```


Per esempio:

`package.json`

```json
{
    "scripts": {
        "foo": "echo Foo!",
        "start": "node server",
        "build": "echo 'Building site' && echo 'Done!'"
    }
}
```

```sh
$ npm run foo
$ npm run start
$ npm run build
```

#### Comandi speciali


NPM supporta anche questo un comando speciale che non necessita di `run`.

```sh
$ npm start
```

Se non configuri `start`, il comando sopra eseguirà questo per te:

```sh
npm node server.js
```

Guarda [Valori predefiniti](https://docs.npmjs.com/misc/scripts#default-values) per gli script NPM.


### Esegue lo script eseguibile di un pacchetto

Un approccio meno comune è quello di eseguire un pacchetto NPM senza passare attraverso NPM e usando un file nella directory `.bin`. Questo potrebbe non essere supportato per tutti i pacchetti.

Ad esempio, dopo aver eseguito `npm install`, questo script avrebbe potuto essere aggiunto a` .bin` con permessi eseguibili.

`node_modules/.bin/hello`

```node
#!/usr/bin/env node
console.log("Ciao, mondo!");
```

Questo può quindi essere eseguito come:

```sh
$ node_modules/.bin/hello`
```
```
Ciao mondo!
```

Lo script bin è un punto di ingresso e potrebbe essere breve, con la maggior parte dei contenuti del pacchetto installati qui:

```
node_modules/
    hello/
        bin/
        src/
        # ...
        README.md
        # ...
```
