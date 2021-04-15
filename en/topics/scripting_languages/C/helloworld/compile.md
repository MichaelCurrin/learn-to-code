# Compile

Use the C Compiler in the command-line to make executable binary files from the `.c` scripts (which are plain text). Note that that the compiled file will only run on the same OS, so often C projects will run a make command on set up to create all the binary files.

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


Create executable named `hello`, using existing file `hello.c`.

```bash
$ cc -o hello hello.c
$ gcc -o hello hello.c
```

Then you can execute the compiled file:

```bash
$ ./hello
```

Default behaviour, without specifying the output filename, will create `a.out` file.

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
