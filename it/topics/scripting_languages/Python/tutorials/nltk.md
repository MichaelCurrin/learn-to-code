# NLTK

Guarda il sito ufficiale [Natural Language Toolkit](http://www.nltk.org/).

Esiste un pacchetto Python per l'elaborazione del linguaggio naturale denominato `nltk`. Può essere utilizzato per parole non significative, dividere parole o frasi e accedere a grandi corpi di testo (corpora), come quelli di Shakespeare.

## Installazione di nltk

```
$ pip install nltk
```

## Installazione delle risorse

Non funziona bene direttamente fuori dalla scatola (out the box). Le importazioni potrebbero funzionare, ma si otterranno errori durante l'esecuzione.

```
$ python
>>> from nltk import word_tokenize
>>> from nltk.corpus import stopwords
>>> print stopwords.words('english')
LookupError:
**********************************************************************
  Resource u'corpora/stopwords' not found.  Please use the NLTK
  Downloader to obtain the resource:  >>> nltk.download()
  Searched in:
    - '/home/myUser/nltk_data'
    - '/usr/share/nltk_data'
    - '/usr/local/share/nltk_data'
    - '/usr/lib/nltk_data'
    - '/usr/local/lib/nltk_data'

>>> print word_tokenize('My sentence.')
LookupError:
**********************************************************************
  Resource u'tokenizers/punkt/english.pickle' not found.
```


Installare le risorse necessarie: il percorso predefinito è `~/nltk_data`, almeno su Linux quando si è in un virtualenv. Si noti che la directory esiste a livello di utente all'esterno di un virtualenv, il che significa che tutti i virtualenv nuovi ed esistenti con il pacchetto `nltk` installato e l'utilizzo della directory di dati predefinita devono essere in grado di accedere alle risorse installate ora.

Guarda la sezione relativa alla configurazione in questo documento se si desidera personalizzare le posizioni delle risorse.


Seguire le istruzioni visualizzate per visualizzare l'elenco delle risorse disponibili. E utilizzare il downloader per installarli per nome. 

```
$ python -m nltk.downloader
NLTK Downloader
---------------------------------------------------------------------------
    d) Download   l) List    u) Update   c) Config   h) Help   q) Quit
---------------------------------------------------------------------------
Downloader>
```

In alternativa, è possibile eseguire questa operazione.

```
$ python
>>> import nltk
>>> nltk.downloader()
```

## Usare le risorse

Dopo aver dowloading delle risorse `stopwords` for `nltk.corpous.stopwords()` e `punkt` per `nltk.word_tokenize()`, è possibile utilizzare tali funzioni senza un errore di ricerca.

Ulteriori informazioni sull'implementazione di parole non significative e tokenizzazione.
- https://stackoverflow.com/questions/17390326/getting-rid-of-stop-words-and-document-tokenization-using-nltk
- https://stackoverflow.com/questions/19130512/stopword-removal-with-nltk
- https://stackoverflow.com/questions/10464265/effects-of-stemming-on-the-term-frequency

## Configurazione


Si noti che anche se nltk è installato nel virtualenv, ho scoperto che le risorse aggiuntive sono state installate nella directory `/nltk_data/` .

Questo può essere modificato specificando una directory (in base alle istruzioni dalla pagina [Installazione dei dati NLTK](http://www.nltk.org/data.html)).


```
$ # Download all resources, equivalent to using 'all' in the interactive downloader.
$ python -m nltk.downloader all

$ # Central installation, with custom directory specified.
$ sudo python -m nltk.downloader -d /usr/local/share/nltk_data all
```
 
In alternativa, utilizzare il downloader interattivo e utilizzare i prompt per accedere alla configurazione e all'impostazione di una nuova directory di dati.

Controllare i percorsi da cui è possibile leggere i dati e il percorso del pacchetto nltk installato. 
```
>>> import nltk
>>> nltk.data.path
['/home/myUser/nltk_data', '/usr/share/nltk_data', '/usr/local/share/nltk_data', '/usr/lib/nltk_data', '/usr/local/lib/nltk_data']
>>> nltk.__path__
['/home/myUser/.local/virtualenvs/myVirtual/local/lib/python2.7/site-packages/nltk']
>>>
```
