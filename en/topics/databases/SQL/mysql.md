# MySQL


## Installation

### Linux

> With the release of Debian 9, MySQL was replaced with MariaDB as the default database system.

You may wish to install MariaDB instead. It is a drop-in replacement for MySQL. See instructions at [How to Install MariaDB on Debian 9](https://linuxize.com/post/how-to-install-mariadb-on-debian-9/)

Otherwise continue with MySQL steps below.

Follow the _mysqlclient-python_ [prerequisites](https://github.com/PyMySQL/mysqlclient-python#prerequisites) instructions first.


Due to updates in 2018 this may be sufficient.

```bash
$ sudo apt install mysql-server
```

The previous instructions are still shown below.

Based on [How To Install MySQL on Debian 9 (Stretch)](https://tecadmin.net/install-mysql-server-on-debian9-stretch/), follow these instructions.

Add to your install sources list.

```bash
$ wget http://repo.mysql.com/mysql-apt-config_0.8.9-1_all.deb
$ sudo dpkg -i mysql-apt-config_0.8.9-1_all.deb
$ rm mysql-apt-config_0.8.9-1_all.deb
```

Install MySQL server (fails to install without the community server installed first).

```bash
$ sudo apt install mysql-community-server mysql-server
```

### macOS

Follow the _mysqlclient-python_ [prerequisites](https://github.com/PyMySQL/mysqlclient-python#prerequisites) instructions first.


```bash
$ brew install mysql
```

Run this to have `launchd` start `mysql` now and also when logging in.

```bash
$ brew services start mysql
```


## Access root database

Login as root database user.

- If you installed with a root password set:
    ```bash
    $ mysql -u root mysql -p
    ```
- Otherwise:
    ```bash
    $ sudo mysql -u root mysql
    $ # Or simply:
    $ sudo mysql
    ```

Check your databases and users at any time.

```sql
> SELECT host, user from mysql.user;

> SHOW DATABASES;

> SHOW GRANTS FOR 'bar'@'localhost';
\q
```

### Create a database and user

Create set up script in the repo. Note this method of providing password is not secure and should be only used for local development.

- `setup_db.sql`
    ```sql
    CREATE DATABASE foo;
    CREATE USER bar;
    -- The syntax needs to be updated if running MySQL version 8 or above.
    GRANT ALL PRIVILEGES ON foo.* TO 'bar'@'localhost' IDENTIFIED BY 'secret';

    -- Run this if you have issues:
    -- FLUSH PRIVILEGES;
    ```

Run it.

```bash
$ sudo mysql < setup_db.sql
```

### Open console

```bash
$ mysql foo -u bar -psecret
```


### Populate the database

Set up scripts to create tables.

- `create_tables.sql`
    ```sql
    DROP TABLE IF EXISTS MyTable;

    CREATE TABLE MyTable (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      value INT,
      color VARCHAR(255),
      -- Consider from MySQL 5.0.3 use BIT for BOOLEAN, though in Python the BIT is fetched as bytes, so keep as BOOLEAN for now.
      pass_flag BOOLEAN
    );
    ```

Set up script to insert data.

- `load_data.sql`
    ```sql
    /**
    *  Delete all existing data and then import from a CSV.
    *  Requires input CSV to exist at the current working directory.
    */

    TRUNCATE TABLE MyTable;

    -- LOCAL is needed to avoid permissions error.
    LOAD DATA LOCAL INFILE 'data.csv'
    INTO TABLE MyTable
    FIELDS TERMINATED BY ','
    -- This is omitted because otherwise causes many rows to be combined or ignored after "iv=300  ,added 2999+20kg".
    -- OPTIONALLY ENCLOSED BY '"'
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

    /* Inspect the data which was loaded. */

    SELECT COUNT(*) AS count FROM MyTable;

    SELECT * FROM MyTable LIMIT 10;
    ```


Run scripts.


```bash
$ mysql foo -u bar -psecret < create_tables.sql
$ mysql foo -u bar -psecret < load_data.sql
```
