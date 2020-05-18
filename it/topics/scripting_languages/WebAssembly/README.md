# WebAssembly

## Che cos'è WebAssembly?

Oppure "WASM" abbreviato.

- Un linguaggio moderno che è ottimo per le operazioni ad alte prestazioni nel browser, senza dover scrivere JavaScript.
- È possibile codificare in un'altra lingua e ottenere Web Assembly come output.
- WebAssembly può essere caricato come modulo nel browser, in modo da poter ottenere il vantaggio delle prestazioni senza scrivere WebAssembly.


## Risorse

* Homepage di [webassembly.org](https://webassembly.org/)
    > WebAssembly (abbreviato Wasm) è un formato di istruzioni binario per una macchina virtuale basata su stack. Wasm è progettato come target portatile per la compilazione di linguaggi di alto livello come C/C++/Rust, consentendo la distribuzione sul Web di applicazioni client e server.
    >
    > - Efficiente e veloce
    > - Sicuro
    > - Aperto e debuggable
    > - Parte della piattaforma web aperta
* Pagina [Wikipedia](https://it.wikipedia.org/wiki/WebAssembly) 
  > WebAssembly (Wasm, WA) è uno standard web che definisce un formato binario e un corrispondente formato testuale per la scrittura di codice eseguibile nelle pagine web. Ha lo scopo di abilitare l'esecuzione del codice quasi alla stessa velocità con cui esegue il codice macchina nativo
* [github.com/webassembly](https://github.com/webassembly)
* [Awesome Wasm](https://awesomeopensource.com/project/mbasso/awesome-wasm)
	>Elenco curato di cose fantastiche sull'ecosistema WebAssembly (wasm)
* Online playgrounds
	- [Elenco](https://awesomeopensource.com/project/mbasso/awesome-wasm#online-playground)
* [WebAssembly](https://developer.mozilla.org/en-US/docs/WebAssembly) su Mozilla docs
	> WebAssembly è un nuovo tipo di codice che può essere eseguito nei moderni browser Web: è un linguaggio di basso livello simile ad un assembly con un formato binario compatto che funziona con prestazioni quasi native e fornisce linguaggi come C/C ++ e Rust con un target di compilazione in modo che possano essere eseguiti sul Web.
	> 
	> È inoltre progettato per funzionare insieme a JavaScript, consentendo a entrambi di lavorare insieme.
* Posts
	- [Sali di livello con la riga di comando con il tutorial WebAssembly](https://opensource.com/article/19/4/command-line-playgrounds-webassembly) 
		> WebAssembly è un potente strumento per portare le utilità della riga di comando sul web e dare alle persone la possibilità di armeggiare con gli strumenti.
		> 
		> WebAssembly (Wasm) è un nuovo linguaggio di basso livello progettato pensando al web. Il suo obiettivo principale è consentire agli sviluppatori di compilare il codice scritto in altre lingue, come C, C ++ e Rust, in WebAssembly ed eseguire quel codice nel browser.
		>
		> In un ambiente in cui JavaScript è stata tradizionalmente l'unica opzione, WebAssembly è una controparte accattivante e consente la portabilità insieme alla promessa di runtime quasi nativi.
		>
		> WebAssembly è già stato utilizzato anche per il porting di molti strumenti sul Web, tra cui applicazioni desktop, giochi e persino strumenti di data science scritti in Python!

Estensioni:

- `wat`
- `.wasm`


## Usi

Alcune linguaggi che producono WebAssembly:
  
- [Elm](../Elm/)
- [Rust](../Rust/)
- [Dart](../Dart/)
 

## Installazione

Consulta la [Guida introduttiva](https://webassembly.org/getting-started/developers-guide/) della homepage per altri sistemi operativi.

### Installazione su supporto distribuzioni Linux 

Download della toolchain

Una toolchain precompilata per compilare C / C ++ in WebAssembly è facilmente ottenibile tramite GitHub.

```sh
$ git clone https://github.com/emscripten-core/emsdk.git
$ cd emsdk
$ ./emsdk install latest
$ ./emsdk activate latest
```

## Compila ed esegui

### Hello world

Esempio basato [sulla guida introduttiva](https://webassembly.org/getting-started/developers-guide/) della homepage.


Creare un file C denominato `hello.c`.

```sh
$ mkdir hello
$ cd hello
$ cat << EOF > hello.c
#include <stdio.h>
int main(int argc, char ** argv) {
  printf("Hello, world!\n");
}
EOF
```

Compilalo con il compilatore `emcc`  e da in output  `hello.html`.

```sh
$ emcc hello.c -o hello.html
```

Possiamo usare il web server `emrun` web server (fornito con l'SDK di Emscripten) per servire i file compilati su HTTP.

Avviare il server Web:

```sh
$ emrun --no_browser --port 8080 .
```

Apri nel browser:

- [localhost:8080/hello.html](http://localhost:8080/hello.html)

Dovresti vedere `Hello, world!` stampato sulla console di Emscripten.


## Esegui nel container

Basato [sull'articolo](https://opensource.com/article/19/4/command-line-playgrounds-webassembly)

```sh
# Scarica l'immagine docker contenente Emscripten
docker pull robertaboukhalil/emsdk:1.38.26

# Crea il container da quell'immagine
docker run -dt --name wasm robertaboukhalil/emsdk:1.38.26

# Immettere il container
docker exec -it wasm bash

# Assicurati di poter eseguire emcc, il wrapper di Emscripten attorno a gcc 
emcc --version
```
