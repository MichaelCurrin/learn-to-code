# Groovy

## What is Groovy?

Groovy is an object-orientated optionally-typed language by Apache. 

It is superset of Java, so it can run Java code inside Groovy. 

Groovy is much lighter to read (like Python or Ruby) compared to Java - for example, you don't need brackets, semi-colons or a class set-up. See [hello.gvy](hello.gvy) and compare with [hello.java](../Java/hello.java). 

Groovy is supposed to improve productivity while still maintaining high performance as compiles to byte code. It designed as a companion and not a replacement for Java.

One use of Groovy is for scripting such as in deployment pipelines on Jenkins.


## Resources

- [Official site](https://groovy-lang.org/index.html)
- Tutorial
    - [Learn](https://groovy-lang.org/learn.html) on the Groovy official site.
    - [Learn Groovy in Y minutes](https://learnxinyminutes.com/docs/groovy/)
    - [Groovy Script Tutorial for Beginners](https://www.guru99.com/groovy-tutorial.html)


## Installation

Docs: [Install Groovy](https://groovy-lang.org/install.html)

- Install with _Maven_.
- Install with [SDKMAN!](https://sdkman.io/).
    - Works on macOS, Linux and Cygwin.
- On macOS, install with Homebrew.
    ```sh
    $ brew install groovy
    ```
- On Windows, use [Windows installer](https://groovy-lang.org/install.html#_installation_on_windows)


## Run

Taken from the installation doc.

### Interactive console

```sh
$ groovysh
```
```
Groovy Shell (2.5.2, JVM: 10.0.2)
Type ':help' or ':h' for help.
------------------------------
groovy:000> :
```

Swing interactive console:

```sh
$ groovyConsole
```

### Run script

Run a `.gvy` or `.groovy` script.

```sh
$ groovy foo.gvy
```
