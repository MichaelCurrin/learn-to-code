#  Node packages
> Come gestire l'ambiente Node e i pacchetti Node

Strumenti da riga di comando trattati qui:

- [NPM](#npm)
    - Installa le dipendenze di NodeJS.
- [Yarn](#yarn)
    - Installa le dipendenze di NodeJS nel modo moderno.
- [NVM](#nvm)
    - Gestisci più versioni di NodeJS.

Vale la pena di sapere come utilizzare entrambi NPM _e_ Yarn. Alcuni progetti avranno preferenze rispetto a quello, ma spesso sono intercambiabili all'interno di un progetto. Yarn ha alcuni vantaggi oltre a NPM che vale la pena usare.


## NPM

Node viene fornito con il comando `npm`.

- NPM home - [npmjs.com](https://npmjs.com/)
- Home page dei documenti NPM - [docs.npmjs.com/](https://docs.npmjs.com/)
- Messaggi
    - [Un'introduzione al gestore pacchetti npm](https://flaviocopes.com/npm/) su blog.

Vedi anche il mio [cheatheet NPM](https://github.com/MichaelCurrin/cheatsheets/blob/master/cheatsheets/package_managers/npm.md) se hai già familiarità con NPM.

### Inizializza

Prima di poter installare i pacchetti in un progetto, è necessario un file `package.json`.

Se non ne hai uno, esegui questo:

```Sh
$ npm init
```

### Directory dei moduli di Node

L'esecuzione del comando install installerà i pacchetti di nodi in una directory chiamata `node_modules`.

In un progetto, questo è alla radice del progetto.

Per un'installazione globale, questo è qui sui sistemi Unix:

```
/usr/local/lib/node_modules
```

Puoi verificarlo con il comando `root`.

```sh
# Progetto
npm root

# Globale
npm root -g
```

### Installazione del progetto

Se installato in un progetto, aggiungi quella directory al tuo file `.gitignore`.

Installa i pacchetti nel progetto corrente - se ometti un nome di pacchetto qui, allora deve esistere il file `package.json`.

```Sh
$ npm installa
```

```Sh
$ npm installa PACKAGE_NAME
```

Se vuoi aggiornare il file `package.json`, usa i flag` --save` o `--save-dev`.

Elenca i pacchetti installati:

```Sh
$ npm list --depth = 0
```

I limiti di profondità che mostrano le dipendenze secondarie riducono così l'output.

### Installazione globale

Installa un pacchetto a livello globale, in modo che sia disponibile da qualsiasi directory. Si noti che se si esegue un progetto su un altro computer, quel pacchetto potrebbe non essere disponibile, quindi in genere su alcuni pacchetti dovrebbe essere installato a livello globale.

```Sdh
$ npm installa -g PACCHETTO
```

Visualizza i pacchetti installati a livello globale.

```Sh
Elenco $ npm
```

È molto dettagliato, quindi prova questo, basato su [post](https://medium.com/@alberto.schiabel/npm-tricks-part-1-get-list-of-globally-installed-packages-39a240347ef0)

```Sh
$ npm list -g --depth 0
├── bower@1.8.8
├── bower-away@1.1.2
├── docsify-cli@4.4.0
├── grunt-cli@1.3.2
├── http-server@0.11.1
├── npm@6.9.0
└── npx@10.2.0
```


### CI

NPM ha un comando `ci`, che viene usato in Github Actions.

- [npm-ci](https://docs.npmjs.com/cli/ci.html)
    > Installa un progetto con una lavagna pulita

Passaggi di esempio dal flusso di lavoro di esempio di azioni Github:

```Yaml
    passaggi:
    # ...
    - esegui: npm ci
    - run: npm run build --if-present
    - esegui: test npm
```


Nota: richiede il file `package-lock.json` o il pacchetto termoretraibile. Non funziona con `yarn.lock`.

Azioni Github: [Setup Node.js Environment](https://github.com/marketplace/actions/setup-node-js-environment)


## Yarn

### Caratteristiche

- Può installare pacchetti dalla cache locale.
- Vincola fortemente le versioni del pacchetto.
- Installazione di pacchetti paralleli.
- Comunità di utenti attivi.

### Come usarlo

Yarn è costruito su NPM, quindi per lo più puoi trattarlo allo stesso modo.

- Richiede il comando `Yarn` per essere installato a livello globale o nel progetto, usando NPM.
- Utilizza lo stesso `package.json` di NPM.
- Usa `yarn.lock` invece di` package.lock.json`.
- I comandi NPM familiari come `install` e` start` funzionano ancora.

### Risorse

- [yarnpkg.com](https://yarnpkg.com)
    > Progetti sicuri, stabili e riproducibili
    >
    > Yarn è un gestore di pacchetti che funge anche da project manager. Sia che tu lavori su progetti one-shot o grandi monorepos, come hobbista o utente aziendale, ti abbiamo coperto.
- [Installa Yarn](https://classic.yarnpkg.com/en/docs/install)
- Tutorial
    - [Perché e come migrare da NPM a YARN](https://waverleysoftware.com/blog/yarn-vs-npm/)


## CI

[Github Action for Yarn](https://github.com/marketplace/actions/github-action-for-yarn)


## NVM

Se si desidera installare più versioni di Node e NPM sul proprio computer, considerare l'utilizzo di NVM. 

Questo non sostituisce `npm` ma consente di alternare tra le versioni di` npm`. Alcuni progetti potrebbero non funzionare con una versione precedente o più recente di `node` o` npm`.

È possibile passare facilmente da una versione all'altra di Node e installare i pacchetti in un ambiente NPM specifico.

Se si esegue `npm install PACKAGE` con una determinata versione, i pacchetti andranno qui per esempio (sui sistemi Unix).

```
~/.Nvm/version/node/v8.9.0/lib/node_modules
```

### Impostare

Segui le istruzioni qui:

- [nvm-sh / nvm](https://github.com/nvm-sh/nvm) repository Github
- [NVM, il modo più semplice per passare da un ambiente all'altro Node.js sulla tua macchina](https://itnext.io/nvm-the-easiest-way-to-switch-node-js-environments-on-your -machine-in-a-flash-17babb7d5f1b? gi = 74712a4b1ad)

Nota che dovrai installare il comando `nvm` e anche aggiornare il tuo file RC della shell per assicurarti che venga prelevato.

### Utilizzo

Dopo l'installazione, è possibile utilizzarlo per installare e passare a una versione di Node di destinazione (e alla versione NPM associata).

Ad esempio, qui installo una nuova versione di Node, senza specificare la versione completa.

```Sh
$ nvm install 13
Download e installazione di Node v13.11.0...
...
$ nvm use 13
```

Visualizza le versioni disponibili:

```
        v6.11.2
         v8.0.0
        v8.15.0
        v10.0.0
       v10.15.0
        v11.0.0
        v12.1.0
 ->    v13.11.0
         sistema
 ```   

È possibile passare dalla versione al terminale e impostare un valore predefinito globale.
