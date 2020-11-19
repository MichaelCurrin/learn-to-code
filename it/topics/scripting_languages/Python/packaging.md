# Guida al Python packaging


- [packaging.python.org/](https://packaging.python.org/)
    - [Tutorials](https://packaging.python.org/tutorials/)
    - [Guide](https://packaging.python.org/guides/)


## Come creare un pacchetto del progetto

Rendere il progetto installabile utilizzando `pip`. Tramite una directory scaricata, un file zip, un nome PyPI o un URL GitHub.

Links:

- [Come pubblicare il proprio pacchetto Python su PyPI](https://realpython.com/courses/how-to-publish-your-own-python-package-pypi/)  guida sul sito RealPython.com .
- [Packaging Python Projects](https://packaging.python.org/tutorials/packaging-projects/) tutorial su [packaging.python.org/](https://packaging.python.org/).



## Data directory

Utilizzare una directory come questa.

```
~/.my-app/
```

C'è una libreria che può gestire questo per voi e appropriato per il sistema operativo.

Guarda anche `~/.local/` e `~/.config/`.

E metti le configurazioni, il database e i log. Questi possono essere utilizzati dall'app e possono essere utilizzati direttamente da un utente (tramite IDE o visualizzatore di file) o se si aggiunge un livello di interfaccia all'applicazione.

Tale installazione di directory può essere creata automaticamente al passaggio dell'installazione.

Ma persistere alla disinstallazione - questo significa che è possibile aggiornare il pacchetto o reinstallarlo e i dati dell'applicazione rimarranno.
