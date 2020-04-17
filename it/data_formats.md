# Formato dei dati


## CSV

- [Comma-separated values](https://it.wikipedia.org/wiki/Comma-separated_values) su Wikipedia.

### Implementazioni

- Python
    - [csv](https://docs.python.org/3/library/csv.html) - una libreria integrata.
- NodeJS
    - [csv](https://csv.js.org/) - un pacchetto NPM.
- PHP
    - [fgetcsv](https://www.php.net/manual/en/function.fgetcsv.php) manuale di funzioni. Guarda anche [tutorial](https://phpenthusiast.com/blog/parse-csv-with-php) che ne fa uso.
    - [str_getcsv](https://www.php.net/manual/en/function.str-getcsv.php) manuale di funzioni.
- Shell
    - [Bash Leggi file CSV separati da virgole su Linux / Unix](https://www.cyberciti.biz/faq/unix-linux-bash-read-comma-separated-cvsfile/) tutorial.
    - comando `awk`
        - [Usare AWK per lavorare con i file CSV](https://newfivefour.com/awk-csv-files.html)
        - [Usare il commando awk per i file .csv ](https://www.unix.com/shell-programming-and-scripting/124886-using-awk-command-csv-file.html)
    - commando `gawk`
        - [leggere file](https://www.gnu.org/software/gawk/manual/html_node/Reading-Files.html) sulla documentazione di GNU.
    - commando `sed`
        - [sed - 10 esempi per sostituire / cancellare / stampare linee di file CSV ](https://www.theunixschool.com/2013/02/sed-examples-replace-delete-print-lines-csv-files.html)
        - [FAQ sed - Come posso analizzare un file di dati delimitato da virgole (CSV)?](https://www.linuxtopia.org/online_books/linux_tool_guides/the_sed_faq/sedfaq4_005.html)


## JSON

- [json.org](https://www.json.org)
- [JSON](https://www.w3schools.com/js/js_json_intro.asp) su W3 Schools.

### Varianti di JSON

- [Jsonnet](https://jsonnet.org/)
- [JSONP](https://www.w3schools.com/js/js_json_jsonp.asp)

### Implementazioni

- Python
    - [json](https://docs.python.org/3/library/json.html)
		- Libreria integrata.
        - Può essere utilizzato anche come strumento da riga di comando per convalidare e stampare graziosamente JSON. Vedi la documentazione [json.tool](https://docs.python.org/3/library/json.html#module-json.tool).
            ```sh
            $ echo '{"json": "obj"}' | python -m json.tool
            {
                "json": "obj"
            }
            ```
- NodeJS
    - [json](https://github.com/trentm/json)
		- Libreria NPM da utilizzare con la riga di comando.
        - Analizza il testo JSON come da un file e restituisce i dati richiesti. Esempio:
            ```sh
            $ echo '{"fred":{"age":42}}' | json fred.age
            ```

## XML

- [XML](https://it.wikipedia.org/wiki/XML) su Wikipedia.


## HTML

Guarda la [guida](/Web%20dev/HTML) in questo progetto.
