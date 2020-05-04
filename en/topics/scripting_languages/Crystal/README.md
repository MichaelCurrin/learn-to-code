# Crystal


## What is Crystal?

A compiled language with the speed of [C](../C/) but the ease of [Ruby](../Ruby/). Types are static but inferred so often you don't have to be explict when defining variables or function parameters.

Sometimes the Crystal code is also valid Ruby code.

- First appeared: 2014
- File extension: `.cr`

I discovered Crystal through seeing it listed under Github Actions starter workflows - [crystal.yml](https://github.com/actions/starter-workflows/blob/master/ci/crystal.yml).

From the [reference](https://crystal-lang.org/reference/) page:

> Crystal is a programming language with the following goals:
>
> - Have a syntax similar to Ruby (but compatibility with it is not a goal).
> - Be statically type-checked, but without having to specify the type of variables or method arguments.
> - Be able to call C code by writing bindings to it in Crystal.
> - Have compile-time evaluation and generation of code, to avoid boilerplate code.
> - Compile to efficient native code.


## Why Crystal?

From this blog post - [Why Crystal is the most promising programming language of 2018](https://medium.com/@DuroSoft/why-crystal-is-the-most-promising-programming-language-of-2018-aad669d8344f). It explains the pros and cons of the language and compares it to others. These are summarized here:


### Reasons for

- Performance (fast)
- Syntax (easy)
- Fibers (for event loops, async, etc.)
- Static Typing
- Macros
- You can still dynamically define methods
- Nil/Null-related errors impossible
- Shards (packages)
- Meteoric rise in popularity ("rose from 60th place to 32nd place in the Tiobe index in a mere month.")
- Cross-platform support
- Web frameworks ("Amber" is similar to Rails but "an order of magnitude faster")

### Limitations

- Windows support not yet complete (as of 2018)
- No parallelism (but coming soon as of 2018)
- Some breaking changes until `1.0`. (see [releases](https://github.com/crystal-lang/crystal/releases))
- REPL support was limited (at least in 2018). See this [issue](https://github.com/crystal-lang/crystal/issues/681)

## Resources

- [crystal-lang.org](https://crystal-lang.org/) homepage
    > A language for humans and computers
    - [Install](https://crystal-lang.org/install/)
    - [Introduction](https://crystal-lang.org/reference/) - summarizes the language.
    - [Getting started](https://crystal-lang.org/reference/getting_started/) in the docs/reference. Includes the CLI help.
    - [Try online](https://play.crystal-lang.org/#/cr)
- [Crystal](https://en.wikipedia.org/wiki/Crystal_(programming_language)) on Wikipedia
- [crystal-lang/crystal](https://github.com/crystal-lang/crystal) on Github
- [Releases](https://github.com/crystal-lang/crystal/releases) on Github.
- [Learn X in Y](https://learnxinyminutes.com/docs/crystal/)
- Tutorials
    - [Intro to Crystal blog post](https://rollout.io/blog/an-introduction-to-crystal-fast-as-c-slick-as-ruby/)
    - [Learn Crystal in one video](https://www.youtube.com/watch?v=DxFP-Wjqtsc)
    - [askn/crystal-by-example](https://github.com/askn/crystal-by-example) on Github


## Install

[Install guide](https://crystal-lang.org/install/)

### Linux

- [Debian](https://crystal-lang.org/install/on_debian/) guide
- [Ubuntu](https://crystal-lang.org/install/on_ubuntu/) guide


### macOS

```sh
$ brew update
$ brew install crystal
```


## Run hello world

Run a [hello.cr](hello.cr) script.

```sh
$ crystal hello.cr
Hello World!
```

Compile and run is in one command here.


## Install dependencies

Dependencies are called "shards".

```sh
shards install
```

## Run tests

```sh
crystal spec
```
