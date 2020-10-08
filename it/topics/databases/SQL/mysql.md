# MySQL


## Installazione

### Linux

> Con il rilascio di Debian 9, MySQL è stato sostituito con MariaDB come sistema di database predefinito.

 Potresti voler installare MariaDB. È un sostituto immediato di MySQL. Vedere le istruzioni su[Come installare MariaDB su Debian 9](https://linuxize.com/post/how-to-install-mariadb-on-debian-9/)

Altrimenti continua con i passaggi per MySQL illustrati di seguito.

Segui prima le istruzioni _mysqlclient-python_ [prerequisiti](https://github.com/PyMySQL/mysqlclient-python#prerequisites).


grazie agli aggiornamenti del 2018, dovrebbe essere sufficiente.

```bash
$ sudo apt install mysql-server 
```

Le istruzioni precedenti sono di nuovo mostrate di seguito.

Basato su [Come installare MySQL su Debian 9 (Stretch)](https://tecadmin.net/install-mysql-server-on-debian9-stretch/), segui queste instruzioni.

Aggiungi l'installazione nella lista dei sorgenti.

```bash
$ wget http://repo.mysql.com/mysql-apt-config_0.8.9-1_all.deb
$ sudo dpkg -i mysql-apt-config_0.8.9-1_all.deb
$ rm mysql-apt-config_0.8.9-1_all.deb
```

Installa MySQL server (non si installa senza prima aver installato il server della community).

```bash
$ sudo apt install mysql-community-server mysql-server 
```

### macOS

Prima segui  le istruzioni _mysqlclient-python_ [prerequisites](https://github.com/PyMySQL/mysqlclient-python#prerequisites).


```bash
$ brew install mysql
```

Esegui questo per fare in modo che `launchd` avvii `mysql` subito e anche quando effettui l'accesso.

```bash
$ brew services start mysql
```


## Accesso alla root del database

Accedi come utente root del database.

- Se hai installato con una password di root impostata
    ```bash
    $ mysql -u root mysql -p
    ```
- Altrimenti:
    ```bash
    $ sudo mysql -u root mysql
    $ # O semplicemente:
    $ sudo mysql
    ```

Controlla i tuoi database e utenti in qualsiasi momento.

```sql
> SELECT host, user from mysql.user;

> SHOW DATABASES;

> SHOW GRANTS FOR 'bar'@'localhost';
\q
```

### Crea un database e un utente

Crea lo script di installazione nel repository. Nota che questo metodo di fornire la password non è sicuro e dovrebbe essere utilizzato solo per lo sviluppo locale.

- `setup_db.sql`
    ```sql
    CREATE DATABASE foo;
    CREATE USER bar;
    -- La sintassi deve essere aggiornata se si esegue MySQL versione 8 o successiva.
    GRANT ALL PRIVILEGES ON foo.* TO 'bar'@'localhost' IDENTIFIED BY 'secret';

    -- Esegui questo comando se riscontri problemi:
    -- FLUSH PRIVILEGES;
    ```

Esegui.

```bash
$ sudo mysql < setup_db.sql
```

### Apri la console

```bash
$ mysql foo -u bar -psecret
```


### Popolare il database

Imposta lo script per creare delle tabelle.

- `create_tables.sql`
    
    ```sql
    DROP TABLE IF EXISTS MyTable;

    CREATE TABLE MyTable (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      value INT,
      color VARCHAR(255),
      -- Considera da MySQL 5.0.3 di usare BIT invece che BOOLEAN, sebbene in Python BIT venga recuperato come byte, quindi per ora usa BOOLEAN.
      
      pass_flag BOOLEAN
    );
    ```

Imposta uno script per inserire dei dati 

- `load_data.sql`

    ```sql
    /**
    *  Elimina tutti i dati esistenti e poi importali da un file CSV.
    *  Richiede che il file CSV di input esista nella cartella di lavoro corrente.
    */

    TRUNCATE TABLE MyTable;

    -- LOCAL è necessario per evitare errori di autorizzazione.
    LOAD DATA LOCAL INFILE 'data.csv'
    INTO TABLE MyTable
    FIELDS TERMINATED BY ','
    -- Questo viene omesso perché altrimenti molte righe verranno combinate o ignorate dopo  "iv=300  ,added 2999+20kg".
    -- EVENTUALMENTE RACCHIUSO TRA '"'
    ESCAPED BY '"'
    LINES TERMINATED BY '\n'
    IGNORE 1 LINES
    (
        name,
        value,
        @color,
        @pass_flag
    )
    SET
        color = NULLIF(TRIM(@color), ''),
        pass_flag = CASE @pass_flag WHEN 'P' THEN TRUE WHEN 'F' THEN FALSE ELSE NULL END,
    ;

    /* Ispeziona i dati che sono stati caricati. */

    SELECT COUNT(*) AS count FROM MyTable;

    SELECT * FROM MyTable LIMIT 10;
    ```


Esegui gli script.


```bash
$ mysql foo -u bar -psecret < create_tables.sql
$ mysql foo -u bar -psecret < load_data.sql
```
