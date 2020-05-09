# Go
> Guide to learning Go (aka Golang)

Info to help you understand what Go is and how to build some basic things with it. There is material here to install and run Go. You can skip that setup and run Go in the browser immediately using one of the online playground links.


## What is _Go_?

- A modern language which started in 2009 at Google.
- Feels similar to Java/JavaScript/C syntax.
- Go excels at high performance as it is a compiled language and supports asynchronous / concurrent programming. It is famous for its _goroutine_ which is like using async or promises in other languages, except Go was designed with this from the start. 
- **Compiled**
    - Go code compiles to a binary executable file (machine code), making it very portable. Just download a file for OS and run. No installation of Go itself or any project dependencies (which are bundled).
- **Strongly and statically typed**
    - Types are explicit - you must give the data type, but sometime this can be inferred.
    - Statically typed - variable types are fixed.
    - Strongly typed checked at compile time give additional safety especially for large projects.
- **Garbage collected**
- Includes a file formatter to avoid style arguments among devs.

A well-known example of a Go application is the Hugo static site generator.


### Definitions

The Go official site at [golang.org](https://golang.org/) says:

> Go is an open source programming language that makes it easy to build simple, reliable, and efficient software.


The [Wikipedia](https://en.wikipedia.org/wiki/Go_(programming_language)) page says:

> Go, also known as Golang, is a statically typed, compiled programming language designed at Google...
>
> Go is syntactically similar to C, but with memory safety, garbage collection, structural typing, and CSP-style concurrency.
>
> The language is often referred to as "Golang" because of its domain name, golang.org, but the proper name is Go.


### Main features

Credit goes to this [article](https://making.pusher.com/my-5-favourite-features-of-go-and-how-to-use-them/).

#### Concurrency

What does [concurrency](https://en.wikipedia.org/wiki/Concurrency_(computer_science)) mean?

A task does not have to be finished before going to the next one - the program can run parts in parallel and to partial completion. This can be great for performance. Example cases are running two tasks at once (such as the user interface and also processing or fetching data in the background, or fetching data from 100 webpages at once and processing them in the order that they finish.

> Go offers some great concurrency primitives and makes it extremely easy to implement a concurrent system. Go offers some great concurrency primitives and makes it extremely easy to implement a concurrent system. Go supports this at the language level and concurrency is a first class citizen. The fundamental unit for this in Go is a go routine. Go routines are cheap, lightweight threads of execution. Spawning a go routine is as simple as adding the go keyword before a function. For example:

#### Simplicity and Consistency

> Go is a relatively simple language and was designed with a very minimalistic approach. I found it easy to pick up and get started with. The standard library contains most things including a web server!

#### Go is object oriented

> Coming from other languages, it may seem like Go is not object-oriented. It does not provide the class keyword and has no support for inheritance. This might seem bizarre. However, Go’s replacement for classes are structs. A struct may have any number of properties and methods defined on them.

#### The Compiler

> Go's compiler is super fast. It is easily possible to compile a large Go program within a few seconds. The fact that the language syntax is so simple means that compilation is much quicker.

#### Pointers

> Most modern languages do not provide pointers, however I do feel pointers help solve a lot of common issues and play a far more important role when it comes to memory layout and building low level system tools.


## Resources

- Official site - [golang.org](https://golang.org/)
    * [Go fmt](https://blog.golang.org/go-fmt-your-code) - the builtin tool to format your code.
        ```bash
        $ go fmt
        ````
    * Note on indentation:
        > We use tabs for indentation and gofmt emits them by default. Use spaces only if you must.
- Github - [golang/go](https://github.com/golang/go)
    * [Wiki](https://github.com/golang/go/wiki) - see the table of contents for tutorials.
- [Go Packages](https://golang.org/pkg/) index
- Tutorials
    * [Learn Go in Y Minutes](https://learnxinyminutes.com/docs/go/)
    * [Effective Go](https://golang.org/doc/effective_go.html) - tutorial on the official site. That covers examples, formatting guide and how to do many things in the language such as errors, functions and concurrency.
    * [Tutorials Point](https://www.tutorialspoint.com/go/index.htm)
    * [Learn Go: Top 30 Go Tutorials for Programmers Of All Levels](https://stackify.com/learn-go-tutorials/)
    * [Golang Cookbook](https://golangcookbook.com/)
        * [Cross-compiling](https://golangcookbook.com/chapters/running/cross-compiling/) - making binaries for Linux, macOS and Windows.
    * [Understanding data types in Go](https://www.digitalocean.com/community/tutorials/understanding-data-types-in-go)
- Blog posts
    * [Lessons learned from programming in Go](https://opensource.com/article/19/12/go-common-pitfalls)
        > Prevent future concurrent processing headaches by learning how to address these common pitfalls.
    * [Asynchronous Programming with Go](https://medium.com/@gauravsingharoy/asynchronous-programming-with-go-546b96cd50c1)
- Online playgrounds
    * [play.golang.org](https://play.golang.org/)
    * [Go on repl.it](https://repl.it/languages/go)
    * [Tutorials Point](https://www.tutorialspoint.com/execute_golang_online.php)
- [Go category on Rosetta code](http://rosettacode.org/wiki/Category:Go)


## Installation

### Install Go

Follow this [install guide](https://golang.org/doc/install#install) from the Go docs.


- Debian/Ubuntu
    1. Get download URL from [Downloads](https://golang.org/dl/) page.
        - Pattern `go$VERSION.$OS-$ARCH.tar.gz`
        - e.g. `https://dl.google.com/go/go1.14.2.linux-amd64.tar.gz`
    1. Download.
        ```sh
        $ cd ~/Downloads
        $ wget URL
        $ # Note root access is needed.
        $ sudo tar -C /usr/local -xzf FILENAME
        ```
    1. Setup path in `.profile`.
        ```sh
        export PATH=/usr/local/go/bin
        ```
- macOS
    1. Install with [Brew](https://brew.sh/).
        ```sh
        brew install go
        ```


Setup access to user-level packages by updating the profile config (`.bash_profile` or `.profile`.)

```sh
export PATH=${HOME}/go/bin:$PATH
```


### Test it

```sh
$ go env
$ go version
```

### Install extra versions

See [doc](https://golang.org/doc/install#extra_versions).


## Run

Compile and run the sample script in this project:

```bash
$ cd Scripts

$ # Compile the `hello.go` script into a binary named `hello`.
$ go build

$ ./hello
Hello, world!
```


## Packages

- [Web scraping packages](https://github.com/lorien/awesome-web-scraping/blob/master/golang.md) guide
- [Colly](https://github.com/gocolly/colly) web scraping library
- [Best Golang Libraries and Packages](https://dev.to/cathysmith/best-golang-libraries-and-packages-3hj1) blog post 
- [Awesome go](https://github.com/avelino/awesome-go)
   > A curated list of awesome Go frameworks, libraries and software
