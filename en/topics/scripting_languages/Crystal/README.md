# Crystal


## What is Crystal?

A compiled language with the speed of [C](../C/) but the ease of [Ruby](../Ruby/). Types are static but inferred so often you don't have to be explict when defining variables or function parameters.

Sometimes the Crystal code is also valid Ruby code.

From [crystal-lang.org](https://crystal-lang.org/):

> A language for humans and computers

From [Wikipedia](https://en.wikipedia.org/wiki/Crystal_(programming_language)):

> Crystal is a general-purpose, object-oriented programming language, designed and developed by Ary Borenszweig, Juan Wajnerman, Brian Cardiff and more than 300 contributors.
>
> With syntax inspired by the language Ruby, it is a compiled language with static type-checking, but specifying the types of variables or method arguments is generally unneeded.
>
> Types are resolved by an advanced global type inference algorithm. Crystal is currently in active development. It is released as free and open-source software under the Apache License version 2.0.

- First appeared: 2014
- File extension: `.cr`


### Language goals

From the [reference](https://crystal-lang.org/reference/) page on the Crystal website:

> Crystal is a programming language with the following goals:
>
> - Have a syntax similar to Ruby (but compatibility with it is not a goal).
> - Be statically type-checked, but without having to specify the type of variables or method arguments.
> - Be able to call C code by writing bindings to it in Crystal.
> - Have compile-time evaluation and generation of code, to avoid boilerplate code.
> - Compile to efficient native code.


### Is it production ready?

Note that according to the homepage, the language is **not yet** production ready.

It has not reached version `1.0`. The latest version is on the homeage. However, some organizations are using in production.

As listed on the Crystal Wiki - [Used in production](https://github.com/crystal-lang/crystal/wiki/Used-in-production).


## Why Crystal?

From this blog post - [Why Crystal is the most promising programming language of 2018](https://medium.com/@DuroSoft/why-crystal-is-the-most-promising-programming-language-of-2018-aad669d8344f). It explains the pros and cons of the language and compares it to others.

These are summarized here:


### Reasons for

- Performance
    - Compiled
    - Fast as C/C++/Rust
- Syntax
    - Easy
- Fibers
    - For event loops, async, etc.
- Static Typing
- Macros
- You can still dynamically define methods
- Nil/Null-related errors impossible
- Shards (packages)
- Meteoric rise in popularity
    - "rose from 60th place to 32nd place in the Tiobe index in a mere month."
- Cross-platform support
- Web frameworks
    - **Amber** - similar to Rails but "an order of magnitude faster"
    - **Kemal.cr** - similar to Sinatra from Ruby
    - **Lucky**

### Limitations

- Windows support not yet complete
    - As of 2018
- No parallelism
    - But coming soon as of 2018.
- Not mature
    - Some breaking changes are happening until `1.0` (see [releases](https://github.com/crystal-lang/crystal/releases)).
    - But "That said there are plenty of companies using Crystal in production".
- REPL support was limited (at least in 2018). See this [issue](https://github.com/crystal-lang/crystal/issues/681)


## Resources

- [crystal-lang.org](https://crystal-lang.org/) homepage - Gives an intro to the syntax.
    - [Install](https://crystal-lang.org/install/)
    - [Introduction](https://crystal-lang.org/reference/) - summarizes the language.
    - [Getting started](https://crystal-lang.org/reference/getting_started/) in the docs/reference. Includes the CLI help.
- [Crystal](https://en.wikipedia.org/wiki/Crystal_(programming_language)) on Wikipedia
- [crystal-lang/crystal](https://github.com/crystal-lang/crystal) on GitHub
- [Releases](https://github.com/crystal-lang/crystal/releases) on GitHub.
- [Learn X in Y](https://learnxinyminutes.com/docs/crystal/)
- Run code online
    - [Official playground](https://play.crystal-lang.org/#/cr)
    - [REPL.it](https://repl.it/languages/crystal)
- Tutorials
    - [Intro to Crystal blog post](https://rollout.io/blog/an-introduction-to-crystal-fast-as-c-slick-as-ruby/)
    - [Learn Crystal in one video](https://www.youtube.com/watch?v=DxFP-Wjqtsc)
    - [askn/crystal-by-example](https://github.com/askn/crystal-by-example) on GitHub
- Post
    - [Top 5 Reasons for Ruby-ists to Use Crystal](https://crystal-lang.org/2018/01/08/top-5-reasons-for-ruby-ists-to-use-crystal.html)
- Videos
    - [Why the future of Ruby is Crystal clear](https://www.youtube.com/watch?v=4jr8aL-xMh0) from Rubyfuza


## Install

For more info, see the [Install guide](https://crystal-lang.org/install/)

### Linux

- [Debian](https://crystal-lang.org/install/on_debian/) guide
- [Ubuntu](https://crystal-lang.org/install/on_ubuntu/) guide


### macOS

```sh
$ brew update
$ brew install crystal
```


## Run

### Commands available

- [Getting started](https://crystal-lang.org/reference/getting_started/) - includes output from `crystal --help`.
- [Using the compiler](https://crystal-lang.org/reference/using_the_compiler/) - includes details on command and usage examples.


### Compile and run in one shot

Run a [hello.cr](hello.cr) script, which is simply a print statement with `puts`. There is no `main` function needed.

```
$ crystal hello.cr
Hello, world!
```

Or

```
$ crystal run hello.cr
Hello, world!
```


### Create an executable then run it

```sh
$ crystal build hello.cr
```

```
$ ./hello
Hello, world!
```


### Web server

There's a hello world web server included as [hello_server.cr](hello_server.cr).

For more info, see [HTTP server](https://crystal-lang.org/reference/getting_started/http_server.html) in the Getting Started section of the reference docs.


### Deployment

I discovered Crystal through seeing it listed under GitHub Actions starter workflows - [crystal.yml](https://github.com/actions/starter-workflows/blob/master/ci/crystal.yml). Use something like that for CI/CI.

See also [Commands available](#commands-available) section on this page for how to use the CLI for releases.


## Install dependencies

Dependencies are called "shards".

```sh
$ shards install
```

## Run tests

```sh
$ crystal spec
```
