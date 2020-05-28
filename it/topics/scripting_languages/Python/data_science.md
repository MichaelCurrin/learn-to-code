# Python per Data Scientists

Se si desidera utilizzare i progetti Python per Data Science, si consiglia di installare [Anaconda](# anaconda) e/o [Conda](# conda), trattati di seguito. Questi sono strumenti popolari per impostare ambienti con versioni e pacchetti specifici di Python e quindi eseguire il codice. In particolare, i programmi forniti con Anaconda aiutano con lo sviluppo, il debug e la visualizzazione nell'output del codice vicino al codice.

Puoi anche ignorare le parti Spyder e Anaconda di questa guida. L'uso di VS Code o PyCharm come IDE e pip per gestire i tuoi ambienti virtuali è perfetto per i progetti di data science di Python. In entrambi i casi, è probabile che si incontrino i notebook [Jupyter](#jupyter), che sono un ottimo modo per sviluppare e mostrare lavoro, indipendentemente dall'IDE e dal gestore env utilizzati.

## Librerie

Librerie Python comunemente utilizzate per la scienza dei dati. Molti di questi sono molto popolari e vengono spesso in tutorial. Spesso sono ottimizzati per le prestazioni (spesso con il codice C scritto per ottimizzarli).

- Elaborazione dati
	- Numpy
		- Per lavorare con array e strutture dati 
	- Pandas
		- Particularly used for its dataframes, which actually come from the [R](topics/scripting_languages/R) language.
        - Utilizzato in particolare per i suoi frame di dati, che in realtà provengono dal linguaggio [R](topics/scripting_languages​​/R).
		- Costruito su Numpy.
		- Utilizzato per leggere o scrivere una fonte tabulare come un CSV. Può anche leggere da un database.
		- Utilizzato per eseguire attività ordinamento dei file, filtro o ricerca in una tabella o un vettore. Sarebbe noioso e meno performante se fatto senza l'uso della libreria.
- Machine Learning:
	- Sci-kit learn
	- TensorFlow
	- Keras
- Dataviz:
	- NetworkX
	- Bokeh
	- Matplotlib


## IPython

- homepage [ipython.org](https://ipython.org/).
- Python per l'elaborazione interattiva.
- Include funzionalità come completamento automatico delle schede, anteprime dei documenti, grafici incorporati e guida estesa.

### Installazione
Installa IPython a livello globale per una particolare versione di Python. O installalo in un ambiente virtuale.

Consulta la guida [installa](https://ipython.org/install.html) sui documenti ufficiali.

Controlla la tua versione e posizione installata. Per esempio:

```sh
$ ipython -V
7.5.0
$ which ipython
/usr/local/bin/ipython
```

## Utilizzo

Avvia IPython.

```bash
$ ipython
Python 3.7.6 (default, Dec 30 2019, 19:38:26)
Type 'copyright', 'credits' or 'license' for more information
IPython 7.5.0 -- An enhanced Interactive Python. Type '?' for help.
```

```
In [1]: print('Hello from IPython')
Hello from IPython
```

Chiedi aiuto su un oggetto usando il nome dell'oggetto e un singolo <kbd>? </kbd> o doppio <kbd> ?? </kbd> per maggiori dettagli in alcuni casi.


```
In [2]: print?
Docstring:
print(value, ..., sep=' ', end='\n', file=sys.stdout, flush=False)

Prints the values to a stream, or to sys.stdout by default.
Optional keyword arguments:
file:  a file-like object (stream); defaults to the current sys.stdout.
sep:   string inserted between values, default a space.
end:   string appended after the last value, default a newline.
flush: whether to forcibly flush the stream.
Type:      builtin_function_or_method
```

Premere <kbd>? </kbd> e accedere per visualizzare la guida di IPython.

```
In []: ?

IPython -- An enhanced Interactive Python
=========================================

IPython offers a fully compatible replacement for the standard Python
interpreter, with convenient shell features, special commands, command
history mechanism and output results caching.

At your system command line, type 'ipython -h' to see the command line
options available. This document only describes interactive features.

GETTING HELP
------------
...
```


## Jupyter

- [jupyter.org](https://jupyter.org/)
    > Project Jupyter esiste per sviluppare software open-source, standard aperti e servizi per il calcolo interattivo attraverso decine di linguaggi di programmazione.
- Esegui i notebook Jupyter.
    -  Questi includono markdown, codice e output (testo e grafici e tabelle incorporati) e sono quindi ideali per iterare il codice e presentare i risultati.
    - Precedentemente noti come notebook iPython, ma ora eseguono più di un semplice iPython. Gestiscono Julia, Python e R (da cui il nome) più Bash.
- Come funziona:
    - Jupyter esegue un server Jupyter con un kernel Python in un ambiente specifico (come uno per il tuo progetto) - funziona localmente.
    - Esegui e modifica il notebook nel browser.
    - Il risultato può essere salvato come file `.ipnb`, quindi quando riavvii mantieni il codice e l'output. Il file del notebook può anche essere visualizzato come formato HTML non interattivo in un IDE (come PyCharm) o su Github, semplificando la condivisione dell'output senza la configurazione di Python per visualizzare il notebook.
- Utilizzare con IDE
    - PyCharm - consultare il [Supporto per notebook Jupyter](https://www.jetbrains.com/help/pycharm/jupyter-notebook-support.html).
    - VS Code - consultare la documentazione [Supporto per Jupyter](https://code.visualstudio.com/docs/python/jupyter-support).


## Spyder

- [spyder-ide.org](https://www.spyder-ide.org/)
    > Spyder è un potente ambiente scientifico scritto in Python, per Python e progettato da e per scienziati, ingegneri e data analysts.
- IDE per l'esecuzione e il debug interattivo del codice e la presentazione dei risultati.
- Spyder include una console [IPython](#ipython) che rende l'output simile a [Jupyter](#jupyter)

Spyder può essere installato utilizzando [Anaconda](#anaconda), coperto di seguito. Spyder può anche essere installato da solo, a livello globale o all'interno di un ambiente virtuale.

### Spyder e ambienti virtuali

Si noti che ogni nuovo ambiente virtuale creato con `conda` non avrà Spyder installato. Quindi quando passi a un ambiente nel terminale o in Ananconda Navigator, troverai Spyder mancante. Quindi, per risolvere questo problema, segui i passaggi seguenti per installare Spyder in ogni nuovo ambiente.

```sh
$ conda activate env_name
$ conda install spyder
$ spyder
```

In alternativa, è possibile aggiornare la configurazione dell'ambiente in Spyder. Aggiorna i percorsi in cui vengono caricate le librerie per includere un ambiente virtuale. Questo non è l'ideale se hai molti ambienti virtuali e continuerà a cercare in ciascuno di essi e troverà la prima libreria abbinata. E questo approccio potrebbe non funzionare con conda envs. Ma funziona su pip envs mentre conda env è impostato sulla base.

Ecco la pagina Wiki di Spyder che si rivolge a questo - [Lavorare con pacchetti e ambienti in Spyder](https://github.com/spyder-ide/spyder/wiki/Working-with-packages-and-environments-in-Spyder).


## Anaconda

### Cos'è Anaconda?

Anaconda è una piattaforma che semplifica la configurazione di un ambiente per l'esecuzione di Python (e altri linguaggi come R).

Include cose per farti risparmiare tempo:

- Anaconda Navigator
    - Una GUI per l'installazione e la gestione di programmi e ambiente, per consentirti di ottenere ciò di cui hai bisogno senza utilizzare il terminale.
    - [documentazione](https://docs.anaconda.com/anaconda/navigator/)
        > Anaconda Navigator è un'interfaccia utente grafica desktop (GUI) inclusa nella distribuzione Anaconda® che consente di avviare applicazioni e gestire facilmente pacchetti conda, ambienti e canali senza utilizzare i comandi della riga di comando
- Librerie Python open source nell'ambiente di base
- Installazioni con un clic di programmi gestiti, tra cui:
    - [Jupyter](#jupyter)
    - [Spyder](#spyder) IDE
    - VS Code (Visual Studio Code) IDE.
- Ambienti virtuali
    - Gestire tramite la GUI di Anaconda Navigator oppure
    - Usa Conda nella shell.
        - Strumento da riga di comando per la gestione delle librerie Python all'interno di ambienti virtuali.
        - [docs.conda.io](https://docs.conda.io/en/latest/)
            > Gestione di pacchetti, dipendenze e ambiente per qualsiasi linguaggio: Python, R, Ruby, Lua, Scala, Java, JavaScript, C / C ++, FORTRAN e altri.

Esiste una versione aziendale e una versione gratuita nota come "Anaconda Distribution".


> Anaconda Distribution è un gestore di pacchetti, gestore dell'ambiente e una distribuzione Python gratuiti e facili da installare con una raccolta di oltre 1500 pacchetti open source con supporto gratuito per la comunità. Anaconda è indipendente dalla piattaforma, quindi puoi usarlo su Windows, macOS o Linux. [Fonte](https://docs.anaconda.com)

### Installazione

Come installare Anaconda Distribution

- Documentazione [Installazione](https://docs.anaconda.com/anaconda/install/) 


## Conda

Conda è per la gestione di ambienti virtuali. Puoi installarlo da solo, senza Anaconda.

Conda è simile a `pip`. Conda fa riferimento ai propri pacchetti di indici per lo più pacchetti di Data Science, mentre pip fa riferimento a PyPI.

_Nota: l'ho trovato frustrante quando ho provato a installare cose con Conda mancanti ma disponibili su `pip`, quindi questo è uno dei motivi per cui preferisco `pip`, ma potrebbero esserci modi per aggirare questo ._

### Installazione

- [Installazione](https://docs.conda.io/projects/conda/en/latest/user-guide/install/index.html) istruzioni nella guida per l'utente.

### Usage

- Documentazione [Guida per l'utente](https://docs.conda.io/projects/conda/en/latest/user-guide/index.html).

Di seguito sono riportati alcuni punti salienti della pagina [Guida introduttiva](https://docs.conda.io/projects/conda/en/latest/user-guide/getting-started.html). Nota, di seguito sono descritte solo le istruzioni macOS/Linux - le istruzioni di Windows sono leggermente diverse.

#### Controlla la versione installata

```sh
$ conda --version
```

```sh
$ conda update conda
```

#### Perché ambienti virtuali?

Un ambiente virtuale è un percorso sandbox monouso per l'installazione di librerie, in genere per un progetto specifico. Ciò significa che è possibile ricreare lo stesso ambiente (set di librerie Python con versione bloccata) su altri computer, sia su un altro laptop, un computer colleghi o un server di produzione.

Questo evita anche conflitti. Ad esempio, supponiamo che tu abbia due progetti (applicazioni Python) che utilizzano entrambi l'ambiente conda di base. L'uno ha bisogno di `request` versione` 2.0.0` e l'altro ha bisogno di `3.0.0`. Ma puoi avere solo una versione di `request` installata in un ambiente. Quindi uno dei progetti non funzionerà. Quindi puoi creare due ambienti virtuali: uno con `2.0.0` e uno con` 3.0.0`. Le librerie vengono modificate in un ambiente virtuale e influiscono solo su quel progetto.

#### Gestisci ambienti virtuali

Creiamo un ambiente virtuale con un determinato nome e un elenco opzionale di librerie da installare, quindi lo attiviamo, controlliamo ciò che è installato e quindi attiviamo la base.

```sh
$ conda create --name snowflakes biopython
```

```sh
$ conda activate snowflakes
(snowflakes) $
(snowflakes) $ conda info --envs
conda environments:

    base           /home/username/Anaconda3
    snowflakes   * /home/username/Anaconda3/envs/snowflakes
```

Disattivazione

```sh
$ conda activate
$
```

#### Gestisci Python

Facoltativamente, specificare una versione di Python da utilizzare:

```sh
$ conda create --name snakes python=3.5
```

```sh
$ conda activate snakes
(snakes) $

(snakes) $ conda info --envs
...

(snakes) $ python --version
...
```

Disattivazione

```sh
(snakes) $ conda activate
$
```

#### Gestione dei pacchetti

Installa un pacchetto/libreria Python con un ambiente virtuale.

Facoltativamente, verificare la presenza di pacchetti con un nome simile e versioni disponibili nel repository delle librerie.

```sh
$ conda search beautifulsoup4
```

Installa un pacchetto, usando la versione opzionale. Vedi la documentazione[installa conda](https://docs.conda.io/projects/conda/en/latest/commands/install.html).

```sh
$ conda install beautifulsoup4

$ conda install bitarray=0.8
```

Mostra i pacchetti installati.

```sh
$ conda list
```
