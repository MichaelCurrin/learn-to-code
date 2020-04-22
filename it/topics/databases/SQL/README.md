# SQL
> Guida per imparare l'installazione di un database SQL e il relativo linguaggio SQL 


## Cosa è SQL? 

Cos'è un database? Un database contiene tabelle (relazioni) di dati in righe e colonne con tipi di dati. I dati possono essere creati, letti, aggiornati e rimossi - Operazioni "CRUD".

Questo articolo introduttivo illustra le basi e alcuni aspetti di SQL

- [Cosa è un sistema per la gestione di basi di dati relazionali (RDBMS) ?](https://www.codecademy.com/articles/what-is-rdbms-sql) su *codecademy.com*

Wikipedia:

> SQL (Structured Query Language) è un linguaggio progettato per la gestione dei dati contenuti in un sistema di gestione di database relazionale (RDBMS) o per l'elaborazione del flusso in un sistema di gestione del flusso di dati relazionale (RDSMS). È particolarmente utile nella gestione di dati strutturati, ovvero dati che incorporano relazioni tra entità e variabili. [Wikipedia](https://en.wikipedia.org/wiki/SQL)

Apparso per la prima volta nel: 1974


## Fondamenti di SQL

### Tutorial e riferimenti

- [Impara SQL in Y minuti](https://learnxinyminutes.com/docs/sql/) su *learnxinyminutes.com*.
- [Basic SQL](https://mode.com/sql-tutorial/introduction-to-sql/) su _mode.com_.
- [Intermediate SQL](https://mode.com/sql-tutorial/sql-aggregate-functions/) su _mode.com_.
- [Lista di comandi SQL](https://www.codecademy.com/articles/sql-commands) su Codecademy.

### Corsi

- [Impara SQL](https://www.codecademy.com/learn/learn-sql) corso interattivo su *codecademy.com*.
- Codecademy
    - [Impara SQL](https://www.codecademy.com/learn/learn-sql)
    - [Catalogo SQL](https://www.codecademy.com/catalog/language/sql) 

### Libri

- Concetti relativi al sistema di database [db-book.com/](https://www.db-book.com/).


## SQL flavors

### SQLite

#### Che cos'è SQLite?

> SQLite è una libreria scritta in linguaggio C che implementa un database SQL piccolo, veloce, autonomo, ad alta affidabilità e completo.
>
> SQLite è il motore di database più utilizzato al mondo. SQLite è integrato in tutti i telefoni cellulari e nella maggior parte dei computer, viene fornito in bundle e in innumerevoli altre applicazioni, che le persone usano ogni giorno. [sqlite.org/matrix/](https://www.sqlite.org/matrix/)

> SQLite è una libreria software che fornisce un sistema di gestione di database relazionali. Lite in SQLite significa leggerezza in termini di installazione, amministrazione del database e risorse necessarie.
>
> SQLite ha le seguenti caratteristiche: autonomo, senza server, a configurazione zero, transazionale. [Cosa è SQLite (sqlitetutorial.net)](https://www.sqlitetutorial.net/what-is-sqlite/)

#### Risorse

- [sqlite.org/](https://www.sqlite.org/) homepage
- [Usi appropriati di SQLite](https://www.sqlite.org/whentouse.html)
- [Documentazione](https://www.sqlite.org/docs.html)
- SQLite e Python
    - [sqlite3](https://docs.python.org/3/library/sqlite3.html) Libreria integrata

#### Sintassi SQLite 

- [SQL As Understood By SQLite](https://www.sqlite.org/lang.html) su qlite.org
    > SQLite comprende la maggior parte del linguaggio standard SQL. Ma omette alcune funzionalità e allo stesso tempo ne aggiunge alcune.

- [parole-chiave di SQLite](https://www.sqlite.org/lang_keywords.html) su qlite.org
- [Comandi SQLite](https://www.sqlitetutorial.net/sqlite-commands/) su sqlitetutorial.net
- [SQLite SELECT](https://www.sqlitetutorial.net/sqlite-select/) su sqlitetutorial.net - guarda altri comandi qui.
- [Tipi di dati di SQLite](https://www.sqlitetutorial.net/sqlite-data-types/)

#### Installa

SQLite potrebbe essere già installato sul tuo sistema. Su macOS e Linux, ho trovato `sqlite3` installato e disponibile come comando. Utilizzare il gestore pacchetti del sistema operativo per aggiornare o installare.

Oppure segui queste pagine:

- [Scarica](https://www.sqlite.org/download.html) sul sito sqlite.org.
- [Scarica e Installa SQLite](https://www.sqlitetutorial.net/download-install-sqlite/) guida sul sito sqlitetutorial.net.

#### Utilizzo

Avvia la console interattiva. Utilizza un database in-memory. Se si specifica un nome file, verrà letto. Se non esiste ancora, verrà creato.

```sh
$ sqlite3 [PATH]
```

Esegui comandi.

```sh
$ sqlite3 [PATH] < query.sql
```


### Postgres

- [postgresql.org](https://www.postgresql.org) homepage
- [postgresql.org/docs/](https://www.postgresql.org/docs/)
- [postgresqltutorial.com](https://www.postgresqltutorial.com/)
- [Avvio rapido sull'ultima versione](https://www.postgresql.org/docs/current/tutorial-start.html)
- Tutorial
    - [Installa e usa Postgres su Ubuntu 18](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-postgresql-on-ubuntu-18-04)

comandi:

- `psql`
    - [Documentazione di psql](https://www.postgresql.org/docs/current/app-psql.html) 
    - [utility di psql](http://postgresguide.com/utilities/psql.html) on postgresguide.com site.
    - Terminale interattivo Postgres.
- `pg_ctrl`
    - [Documentazione di pg_ctl](https://www.postgresql.org/docs/current/app-pg-ctl.html) 
    - Comando di controllo per la gestione di un database cluster.

#### Installazione

Vedi anche la guida di [Installazione](http://postgresguide.com/setup/install.html) sul sito postgresguide.com.

- macOS
    - [postgresapp.com](http://www.postgresapp.com/)
- Debian/Ubuntu
    ```sh
    sudo apt-get install postgresql
    ```

### MySQL

- [mysqltutorial.org](https://www.mysqltutorial.org/)
- [tutorialspoint.com](https://www.tutorialspoint.com/mysql/index.htm)
