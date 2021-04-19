# Hello World
> Compile and run a C script, using a Hello World example

Use the C Compiler in the command-line to make executable binary files from the `.c` scripts (which are plain text). 

You _can_ add the compiled file to version control, but is no generally the case. A compiled file will only run on the same OS and archtitecture, so often C projects will provide a `Makefile` command, so that a machine can run `make` to compile all files.

Sometimes, you might choose to compile several versions of your application (such as for macOS, Linux and Windows) using C (or another language like Go or Rust). And then distributed those multiple pre-built files on GitHub Releases or for access to download on your website.


## Linux and macOS

### GCC vs CC Compiler

Use either `cc` or `gcc` commands in bash. `gcc` is the GNU C Compiler from the GCC (GNU Compiler Collection).

- According to this [forum discussion](https://ubuntuforums.org/showthread.php?t=1161860), they can be used interchangeably.
    > "In Ubuntu (and most other Linux distributions I guess) cc is gcc."
- [Difference between GCC and CC Compiler | Difference Between](http://www.differencebetween.net/technology/software-technology/difference-between-gcc-and-cc-compiler/#ixzz57An6TmIQ)
    > CC is the name given to the UNIX Compiler Command. It is used as the default compiler command for your operating system and also is executable with the same command. GCC, on the other hand, is the GNU Compiler operating system. On systems that run on GNU and Linux, it is common to find the CC being a link so that the scripts can use either compiler interchangeably and easily.
    >
    > There are various differences observed as regards to using the GNU compiler collection and the CC compiler. These differences can generally be grouped into two main groups. One of these is more specific while the other group is more generic.

### How to compile and execute

```bash
$ gcc --help
```
```
Usage: gcc [options] file...
Options:
  ...
  -o <file>                Place the output into <file>.
  ...
```

Using the script [hello.c](hello.c), we create an executable named `hello` (no extension) using the `-o` flag.

```bash
$ cc -o hello hello.c
$ gcc -o hello hello.c
```

Then execute the compiled file:

```bash
$ ./hello
```

Without specifying the output filename with `-o`, the default behaviour is to create `a.out` file. That is a rather generic name.

```bash
$ gcc hello.c
$ ./a.out
```


## Windows

### How to compile and run

Based on [tutorial](https://docs.microsoft.com/en-us/cpp/build/walkthrough-compile-a-c-program-on-the-command-line?view=vs-2019)

Compile the script.

```sh
> cl hello.c
```

That will create `hello.exe`.

Run it like this:

```sh
> hello
```
