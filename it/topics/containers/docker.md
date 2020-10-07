# Docker


## Risorse

- Pagina Wikipedia 
    - [Docker](https://it.wikipedia.org/wiki/Docker)
        > Docker è un insieme di prodotti di piattaforma come servizio che utilizza la virtualizzazione a livello di sistema operativo per fornire software in pacchetti chiamati contenitori. I contenitori sono isolati l'uno dall'altro e raggruppano i propri software, librerie e file di configurazione; possono comunicare tra loro attraverso canali ben definiti.
- Sito di Docker 
    - [docker.com](https://docker.com) homepage
        > Docker: Potenziare lo sviluppo di app per gli sviluppatori
- Documentazione Docker 
    - [docs.docker.com](https://docs.docker.com/) homepage
    - guida [Download e installazione](https://docs.docker.com/get-docker/).
    - [Esempi](https://docs.docker.com/samples/)
    - Guide
        - [Build](https://docs.docker.com/engine/reference/commandline/build/)
        - [CMD](https://docs.docker.com/engine/reference/builder/#cmd)
- Trova immagini
    - Docker hub
        - [https://hub.docker.com/](https://hub.docker.com/)
            > Docker Hub è il modo più semplice al mondo per creare, gestire e distribuire le applicazioni container dei tuoi team.
        - Cerca immagini docker esistenti da scaricare e utilizzare.
        - Crea un profilo e carica la tua immagine docker.
    - Immagini Docker popolari come da documentazione
        - [Guida alla libreria](https://docs.docker.com/samples/#library-references)
- Tutorial
    - video Youtube: [Devi imparare Docker ORA!! // Container Docker 101](https://www.youtube.com/watch?v=eGz9DS-aIeY)
    - [Docker per principanti](https://github.com/docker/labs/tree/master/beginner/) (link trovato nella documentazione di Docker)
    - [Procedure consigliate per la scrittura di Dockerfiles](https://docs.docker.com/develop/develop-images/dockerfile_best-practices/)
        

Guarda anche il mio progetto con le relative istruzioni di installazione, comandi da eseguire e progetti di esempio.

- [MichaelCurrin/docker-quickstart](https://github.com/MichaelCurrin/docker-quickstart)


## Installazione di Docker

Vai sulla pagina [Ottieni Docker](https://docs.docker.com/get-docker/).

Vedrai i relativi link alle istruzioni per l'installazione su macOS, Windows o Linux.

### macOS

Per ottenere questa pagina:

- [Installa Docker Desktop su Mac](https://docs.docker.com/docker-for-mac/install/)

Per macOS è disponibile un file da scaricare dal browser. Trascina il file `Docker.app` scaricato nelle tue _Applicazioni_ secondo le istruzioni di installazione e otterrai l'app Docker.

Questa installazione include la CLI `docker` e l'app Docker: quest'ultima si aggancia come icona nella parte superiore dello schermo e consente funzionalità come l'accesso all'hub Docker, cambiando l'ambiente Kubernetes.

### Linux

Segui queste istruzioni:

- [Debian](https://docs.docker.com/engine/install/debian/)
- [Ubuntu](https://docs.docker.com/engine/install/ubuntu/)
