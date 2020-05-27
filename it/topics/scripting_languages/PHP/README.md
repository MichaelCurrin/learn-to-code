# PHP

## Che cos'è PHP?

Dal manuale PHP [Getting started](https://www.php.net/manual/en/intro-whatis.php) :

> PHP (acronimo ricorsivo per PHP: Hypertext Preprocessor) è un linguaggio di script open source di uso molto usato che è particolarmente adatto per lo sviluppo Web e può essere incorporato in HTML.


## 📚 Risorse

- [sito ufficiale PHP](https://www.php.net/)
- Librerie
    - [Composer](https://getcomposer.org/) - gestore delle dipendenze
    - [Laravel](https://laravel.com/) - web framework
    - PHP CMS's
        - [WordPress.org](http://wordpress.org/)
        - [Moodle](https://moodle.org/) - [Pagina Wikipedia](https://it.wikipedia.org/wiki/Moodle)
        - [Joomla](https://www.cloudways.com/blog/best-php-cms/#joomla)
        - [Drupal](https://www.cloudways.com/blog/best-php-cms/#drupal)
- Tutorials
    - [PHP tutorials](https://www.w3schools.com/PhP/default.asp) ([w3schools.com](https://www.w3schools.com))
    - [Solo Learn](https://www.sololearn.com/) - guarda il loro corso sul PHP.
    - [Impara PHP in Y minuti](https://learnxinyminutes.com/docs/php/)
- Blog posts
    - [PHP nel 2020](https://stitcher.io/blog/php-in-2020)
    - [Le 40 migliori librerie PHP del 2020 che ogni sviluppatore dovrebbe conoscere](https://www.cloudways.com/blog/php-libraries/)
    - [Migliori 14 CMS PHP in mercato per gli sviluppatori in 2020](https://www.cloudways.com/blog/best-php-cms/) post)
    - [Evoluzione di PHP — v5.6 a v8.0](https://medium.com/@meskis/evolution-of-php-v5-6-to-v8-0-c3514ebb7f28)


## Siti costruiti con PHP

- [WordPress.com](https://wordpress.com/) - l'hosting, costruito su tecnologia open-source WordPress.org gratuita.
- [Facebook.com](https://facebook.com)

Vedi questa pagina di risposta di Quora per un elenco più lungo - [Quali sono i primi 10 siti web costruiti con PHP?](https://www.quora.com/What-are-the-top-10-websites-built-with-PHP).


## Installazione

### Debian/Ubuntu

Installare con `apt-get`. Da [come installare LAMP su Ubuntu](http://howtoubuntu.org/how-to-install-lamp-on-ubuntu#install-php).

```bash
$ sudo apt-get install php
```

### macOS

Utilizzare brew per l'aggiornamento a PHP 7.3+. Dalla [guida](https://stitcher.io/blog/php-73-upgrade-mac). Guarda anche le estensioni elencate.

```bash
$ brew upgrade php
```

Utilizzare curl e bash per installare PHP 7.3 - dalla [guida](https://tecadmin.net/install-php-macos/).

```bash
$ curl -s http://php-osx.liip.ch/install.sh | bash -s 7.3
```

## Utilizzo

L'obiettivo è quello di vedere i file PHP del progetto come vengono visualizzati nel terminale o nel browser e di confrontarlo con i file di origine `.php` in un'altra finestra.

### Esegui nel terminale

Controllare la versione.

```bash
$ php --version
PHP 7.1.23 (cli) (built: Feb 22 2019 22:19:32) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
```

Passare la stringa a PHP per l'esecuzione.

```bash
$ php -r 'echo "\n\nYour PHP installation is working fine.\n\n\n";'
```

Eseguire lo script.

```bash
$ php path/to/file.php
```

Avviare una console interattiva. Quindi eseguire i comandi PHP.

```bash
$ php -a
```
```
php > echo 'Hello!';
Hello!
php >
```

### Esegui nel browser

#### Server PHP 

1. Avviare un server Web PHP.

<!--TODO: Use public directory instead and look at how other sites separate index and public files e.g. 000webhost.com-->

```bash
$ cd learn-to-code/PHP/
$ php -S 127.0.0.1:8000
```

2. Apri [127.0.0.1:8000](http://127.0.0.1:8000) nel tuo browser web.
    - Vedrai il rendering della pagina [index.html](index.html).
    - Fare clic sui collegamenti per visualizzare il risultato dei file PHP che si trovano nella directory [static](static).
    - Se si immette un URL non valido si otterrà questo errore: _Not Found The requested resource /filename.ext was not found on this server._
    - Se si immette il percorso nel browser come http://127.0.0.1:8000/README.md, il file verrà scaricato anziché visualizzato.
    - C'è un modo per impostare _autoindex_ per elencare il contenuto della directory se non c'è pagina index, ma che sembra richiedere l'installazione di qualcosa.

3. Controllare il registro del server
  - Visualizzare il registro delle richieste del server, che viene restituito nel terminale in cui è in esecuzione il server.
  - Ciò è utile per visualizzare l'attività sul server e per eseguire il debug e i file mancanti o la sintassi errata all'interno degli script. Ecco qualche output di esempio.

```
[Fri Mar  2 19:27:49 2018] 127.0.0.1:33050 [200]: /

[Fri Mar  2 19:27:49 2018] 127.0.0.1:33054 [404]: /favicon.ico - No such file or directory

[Fri Mar  2 20:10:22 2018] PHP Parse error:  syntax error, ... in /path/to/file.php on line 11
[Fri Mar  2 20:10:22 2018] 127.0.0.1:33554 [500]: /static/printing.php - syntax error, ... on line 11
```

## Altri server

Il semplice server HTTP di Python non è configurato per impostazione predefinita per l'esecuzione di script PHP. Tuttavia, è possibile utilizzare il server web di PHP.

Guarda queste risorse:

- [Come eseguire PHP con un semplice server HTTP](https://serverfault.com/questions/338394/how-to-run-php-with-simplehttpserver)
- [Server HTTP semplice Python con PHP](https://stackoverflow.com/questions/12235876/python-simplehttpserver-with-php)
