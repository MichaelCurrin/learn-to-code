# SQL
> Guide for learning SQL and installing and using SQL databases 


## What is SQL? 

What is a database and an RDMS? This intro article covers the basics and some flavors of SQL 

- [What is a Relational Database Management System?](https://www.codecademy.com/articles/what-is-rdbms-sql)

> SQL (Structured Query Language) is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). It is particularly useful in handling structured data, i.e. data incorporating relations among entities and variables. [Wikipedia](https://en.wikipedia.org/wiki/SQL)

First appeared: 1974


## General SQL

### Tutorials and references

- [Learn SQL in Y minutes](https://learnxinyminutes.com/docs/sql/) on *learnxinyminutes.com*.
- [Basic SQL](https://mode.com/sql-tutorial/introduction-to-sql/) on _mode.com_.
- [Intermediate SQL](https://mode.com/sql-tutorial/sql-aggregate-functions/) on _mode.com_.
- [List of SQL Commands](https://www.codecademy.com/articles/sql-commands) on Codecademy.

### Courses

- [Learn SQL](https://www.codecademy.com/learn/learn-sql) interactive course with coding environment. On *codecademy.com*.
- Codecademy
    - [Learn SQL](https://www.codecademy.com/learn/learn-sql)
    - [SQL](https://www.codecademy.com/catalog/language/sql) catalogue

### Books

- Database System Concepts on [db-book.com/](https://www.db-book.com/).


## SQL flavors

### SQLite

#### What is SQLite?

> SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.
>
> SQLite is the most used database engine in the world. SQLite is built into all mobile phones and most computers and comes bundled inside countless other applications that people use every day. [sqlite.org/matrix/](https://www.sqlite.org/matrix/)

> SQLite is a software library that provides a relational database management system. The lite in SQLite means light weight in terms of setup, database administration, and required resource. 
>
> SQLite has the following noticeable features: self-contained, serverless, zero-configuration, transactional. [What is SQLite (sqlitetutorial.net)](https://www.sqlitetutorial.net/what-is-sqlite/)

#### Resources

- [sqlite.org/](https://www.sqlite.org/) homepage
- [Appropriate uses for SQLite](https://www.sqlite.org/whentouse.html)
- [Documentation](https://www.sqlite.org/docs.html)
- SQLite and Python
    - [sqlite3](https://docs.python.org/3/library/sqlite3.html) builtin library

#### SQLite syntax

- [SQL As Understood By SQLite](https://www.sqlite.org/lang.html) on qlite.org
    > SQLite understands most of the standard SQL language. But it does omit some features while at the same time adding a few features of its own.
- [SQLite keywords](https://www.sqlite.org/lang_keywords.html) on qlite.org
- [SQLite commands](https://www.sqlitetutorial.net/sqlite-commands/) on sqlitetutorial.net
- [SQLite SELECT](https://www.sqlitetutorial.net/sqlite-select/) on sqlitetutorial.net - see other commands there.
- [SQLite data types](https://www.sqlitetutorial.net/sqlite-data-types/)

#### Install

SQLite might already be installed on your system. On macOS and Linux, I found `sqlite3` installed and available as a command. Use your OS package manager to update or install.

Or follow these pages:

- [Download](https://www.sqlite.org/download.html) page on sqlite.org site.
- [Download and Install SQLite](https://www.sqlitetutorial.net/download-install-sqlite/) guide on sqlitetutorial.net site.

#### Usage

Start interactive console. Uses an in-memory databases. If you specify a filename, it will be read. If does not exist yet, it will be created.

```sh
$ sqlite3 [PATH]
```

Run commands.

```sh
$ sqlite3 [PATH] < query.sql
```


### Postgres

- [postgresql.org](https://www.postgresql.org) homepage
- [postgresql.org/docs/](https://www.postgresql.org/docs/)
- [postgresqltutorial.com](https://www.postgresqltutorial.com/)
- [Quickstart on latest version](https://www.postgresql.org/docs/current/tutorial-start.html)
- Tutorials
    - [Install and use Postgres on Ubuntu 18](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-postgresql-on-ubuntu-18-04)

Commands:

- `psql`
    - [psql docs](https://www.postgresql.org/docs/current/app-psql.html) 
    - [psql utility](http://postgresguide.com/utilities/psql.html) on postgresguide.com site.
    - Postgres interactive terminal.
- `pg_ctrl`
    - [pg_ctl docs](https://www.postgresql.org/docs/current/app-pg-ctl.html) 
    - Control command for managing a database cluster.

#### Installation

See also [Install](http://postgresguide.com/setup/install.html) guide on postgresguide.com site.

- macOS
    - [postgresapp.com](http://www.postgresapp.com/)
- Debian/Ubuntu
    ```sh
    sudo apt-get install postgresql
    ```

### MySQL

- [mysqltutorial.org](https://www.mysqltutorial.org/)
- [tutorialspoint.com](https://www.tutorialspoint.com/mysql/index.htm)
