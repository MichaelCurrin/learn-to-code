# Go
> Guide to learning the Go programming language

Info to help you understand what Go is and how to build some basic things with it. There is material here to install and run Go. You can skip that setup and run Go in the browser immediately using one of the online playground links.

For links on learning Go, see [Go](https://michaelcurrin.github.io/dev-resources/resources/go/) on my Dev Resources.

See [Go](https://github.com/MichaelCurrin/code-cookbook/recipes/go/) recipes in my Code Cookbook.


## What is Go?

- A modern language which started in 2009 (same as Node) and had the first stable release in 2011. It was created at Google.
- Feels similar to Java/JavaScript/C syntax. Its design was influenced by Python for speed.
- Go excels at high performance as it is a compiled language.
- It supports asynchronous / concurrent programming - it was built to handle multicore processing and distributed processing across machines. Go has the _goroutine_ which is like using async or promises in other languages, except Go was designed with this from the start.
- **Compiled**
    - Go code compiles to a binary executable file (machine code), making it very portable. Just download a file for OS and run. No installation of Go itself or any project dependencies (which are bundled).
- **Strongly and statically typed**
    - Types are explicit - you must give the data type, but sometime this can be inferred.
    - Statically typed - variable types are fixed.
    - Strongly typed checked at compile time give additional safety especially for large projects.
- **Garbage collected**
- **Memory safety**
    - Influenced by C.
    - Go may be compiled and fast but it is not magical. Bad Go code won't be safe. I watched a Go conference where they demonstrated that GB of memory were allocated and not deallocated in the life of the program which lead to 10x allocation of memory even though the application was only using a small amount at each point. So optimizing code is still needed.
- **Structural typing**
- Go includes a file formatter, to avoid style arguments among devs.
- Some examples of Go applications are Docker, Terraform (and other HashiCorp tools) and Hugo the static site generator.
- Go has cleaner error handling than try/catch of JavaScript.

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

From [Node vs Go comparison](https://yalantis.com/blog/golang-vs-nodejs-comparison/)

> Rob Pike, the creator of Go, says that Go is an excellent tool for large software projects. With channels and goroutines, concurrency is a strong side of Go. Goroutines are methods or functions that run in parallel with other methods or functions. Goroutines are lightweight: their initial size is only 4 KB, compared to operating system threads, which are initially 1 MB. The Go environment allows developers to run thousands of goroutines simultaneously without using too much RAM. Information between two Goroutines is passed via channels that hide the complexity and let you structure your programs in a maintainable way.

#### Simplicity and Consistency

> Go is a relatively simple language and was designed with a very minimalistic approach. I found it easy to pick up and get started with. The standard library contains most things including a web server!

#### Go is object oriented

> Coming from other languages, it may seem like Go is not object-oriented. It does not provide the class keyword and has no support for inheritance. This might seem bizarre. However, Go’s replacement for classes are structs. A struct may have any number of properties and methods defined on them.

#### The Compiler

> Go's compiler is super fast. It is easily possible to compile a large Go program within a few seconds. The fact that the language syntax is so simple means that compilation is much quicker.

#### Pointers

> Most modern languages do not provide pointers, however I do feel pointers help solve a lot of common issues and play a far more important role when it comes to memory layout and building low level system tools.


## Installation

### Install Go

Follow the steps below, based on the [install guide](https://golang.org/doc/install#install) from the Go docs.

- Debian/Ubuntu
    - Using a package manager
        1. Install with `apt` to `/usr/bin/go`. NB. Requires root privileges.
            ```sh
            $ sudo apt install golang-go
            ```
    - Download from the Go website.
        1. Get download URL from [Downloads](https://golang.org/dl/) page.
            - Pattern `go$VERSION.$OS-$ARCH.tar.gz`
            - e.g. `go1.14.2.linux-amd64.tar.gz` or full URL: `https://dl.google.com/go/go1.14.2.linux-amd64.tar.gz`
        1. Download.
            ```sh
            $ cd ~/Downloads

            $ wget <url>
            $ # OR
            $ curl -O <url>
        1.  Unzip as `go/` directory.
            - Shared directory.
                ```sh
                $ sudo tar -C /usr/local -xzf <filename>
                ```
            - Or a user directory.
                ```sh
                $ tar -C ~/.local/ -xzf <filename>
                ```
        1. Setup path in `.profile` or `.bashrc`/`.zshrc`. There is a `go` executable in the `bin` directory which must be accessible.
            - Shared directory.
                ```sh
                $ export PATH=/usr/local/go/bin
                ```
            - Or a user directory.
                ```sh
                $ export PATH="$HOME/.local/go/bin
                ```
- macOS
    1. Install with [Brew](https://brew.sh/).
        ```sh
        $ brew install go
        ```


Setup access to user-level packages in `~/go/bin` by updating your profile config (`.bash_profile` or `.profile`.)

```sh
export PATH="$HOME/go/bin:$PATH"
```


### Test it

```sh
$ go version
$ go env
```

### Setting Go path

The `GOPATH` is not where go is installed but where packages are.

The default value for `GOPATH` is `~/go`.

> The command `go env GOPATH` prints the effective current `GOPATH`; it prints the default location if the environment variable is unset.

```sh
$ go env GOPATH
/home/michael/go
```

You can replace it as per the [docs](https://golang.org/doc/gopath_code.html#GOPATH).

> For convenience, add the workspace's bin subdirectory to your `PATH`:
>
> ```sh
> $ export PATH=$PATH:$(go env GOPATH)/bin
> ```

> The scripts in the rest of this document use `$GOPATH` instead of `$(go env GOPATH)` for brevity. To make the scripts run as written if you have not set GOPATH, you can substitute `$HOME/go` in those commands or else run:
>
> ```sh
> $ export GOPATH=$(go env GOPATH)
> ```


### Install extra versions

From [Extra versions](https://golang.org/doc/install#extra_versions) section of install doc.

Use the `get` command once Go is installed to fetch another version.

```sh
$ go get golang.org/dl/go1.10.7
$ go1.10.7 download
```

Test it.

```sh
$ go1.10.7 version
go version go1.10.7 linux/amd64
```


## Run

For reference, see [Hello World](https://gobyexample.com/hello-world) in Go docs - you can also the run code directly there by clicking the icon in the top right of the code block.

Compile and run the sample script in this project.

Go to this directory:

```bash
$ cd Scripts
```

### Run a script

```sh
$ go run hello.go
Hello, world!
```

### Create a compiled file

Run the build step to compile and then output binary executable file named `hello`.

```sh
$ go build hello.go
```

Then run the binary (no extension, but on Windows it would be `.exe`).

```sh
$ ./hello
Hello, world!
```

### Install your package globally

Run this in your project to create a compiled file in your user's Go bin.

```sh
$ go install
```

Then you can run it from anywhere.

```sh
$ hello
```


## Command reference

See [go command](https://golang.org/cmd/go/) in the docs. It covers many tasks like printing a version, handling dependencies and compile and run.

Usage:

```sh
go <command> [arguments]
```

The commands are:

```
bug         start a bug report
build       compile packages and dependencies
clean       remove object files and cached files
doc         show documentation for package or symbol
env         print Go environment information
fix         update packages to use new APIs
fmt         gofmt (reformat) package sources
generate    generate Go files by processing source
get         add dependencies to current module and install them
install     compile and install packages and dependencies
list        list packages or modules
mod         module maintenance
run         compile and run Go program
test        test packages
tool        run specified go tool
version     print Go version
vet         report likely mistakes in packages
```


## Dependency management

### Add and install package

Add dependencies to current module and install them.

Usage:

```sh
go get [-d] [-t] [-u] [-v] [-insecure] [build flags] [packages]
```

This resolves and adds dependencies to the current development module and then builds and installs them.


Example:

```sh
go get -u github.com/gorilla/mux
```

The `-u` flag will also update.


### Install packages

Compile and install packages and dependencies

Usage:

```sh
go install [-i] [build flags] [packages]
```

This compiles and installs the packages named by the import paths.

 The `-i` flag installs the dependencies of the named packages as well.

### List packages

Usage:

```sh
go list [-f format] [-json] [-m] [list flags] [build flags] [packages]
```

This lists the named packages, one per line. The most commonly-used flags are -f and -json, which control the form of the output printed for each package. Other list flags, documented below, control more specific details.
