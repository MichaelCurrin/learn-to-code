# Compilazione


Utilizzare il compilatore C da riga di comando per creare file binari eseguibili dai file di testo `.c`.


## GCC vs Compilatore CC 


Usa i comandi `cc` o` gcc` nella bash. `gcc` è il compilatore GNU C della GCC (GNU Compiler Collection).

Secondo questa [discussione sul forum](https://ubuntuforums.org/showthread.php?t=1161860), possono essere usati in modo intercambiabile.

>"Su Ubuntu (e nella maggior parte delle altre distribuzioni Linux), credo che cc si riferisca a gcc."


Differenza tra compilatore GCC e CC http://www.differencebetween.net/technology/software-technology/difference-between-gcc-and-cc-compiler/#ixzz57An6TmIQ

>CC è il nome assegnato al comando del compilatore UNIX. È usato come comando predefinito del compilatore per il tuo sistema operativo ed è anche eseguibile con lo stesso comando. GCC, d'altra parte, è il sistema operativo del compilatore GNU. Sui sistemi che funzionano su GNU e Linux, è comune trovare CC come un collegamento in modo che gli script possano usare entrambi i compilatori in modo intercambiabile e facilmente. Ci sono varie differenze osservate riguardo all'uso della raccolta del compilatore GNU e del compilatore CC. Queste differenze possono generalmente essere raggruppate in due gruppi principali. Uno di questi è più specifico mentre l'altro gruppo è più generico.

## Come compilare ed eseguire

```bash
$ gcc --help
uso: gcc [opzioni] file...
Opzioni:
  ...
  -o <file>               Posiziona l'output nel <file>.
  ...
```


Crea un eseguibile chiamato `hello`, usando il file esistente` hello.c`.

```bash
$ cc -o hello hello.c
$ gcc -o hello hello.c
```

Quindi è possibile eseguire il file compilato:

```bash
$ ./hello
```

Comportamento predefinito senza stare a specificare il nome del file di output:
```bash
$ gcc hello.c
$ ./a.out
```
