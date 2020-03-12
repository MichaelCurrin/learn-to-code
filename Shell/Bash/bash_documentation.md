# Bash documentation


## Online man pages

Look up manuals for Bash / Unix commands using the browser:

- https://www.unix.com/man-page-collection.php?os=linux
- https://linux.die.net/man/
- https://ss64.com/bash/


## Terminal docs

### Help

To get help on a command, try one of the following. Not all are supported and some may give no content or an error.

```sh
COMMAND -h
COMMAND --help
```

### Info

```sh
info COMMAND
```

```sh
info ls
```

### Man pages

Read the manual or 'man page'

```sh
man COMMAND
```

```sh
man ls
```

```sh
man man
NAME
       man - format and display the on-line manual pages

SYNOPSIS
       man [-acdfFhkKtwW] [--path] [-m system] [-p string] [-C config_file] [-M pathlist] [-P pager] [-B browser] [-H htmlpager] [-S section_list] [section] name ...
...
```

```sh
man --help
man, version 1.6g

usage: man [-adfhktwW] [section] [-M path] [-P pager] [-S list]
	[-m system] [-p string] name ...

  a : find all matching entries
  c : do not use cat file
  d : print gobs of debugging information
  D : as for -d, but also display the pages
  f : same as whatis(1)
  h : print this help message
  k : same as apropos(1)
  K : search for a string in all pages
  t : use troff to format pages for printing
  w : print location of man page(s) that would be displayed
      (if no name given: print directories that would be searched)
  W : as for -w, but display filenames only

  C file   : use `file' as configuration file
  M path   : set search path for manual pages to `path'
  P pager  : use program `pager' to display pages
  S list   : colon separated section list
  m system : search for alternate system's man pages
  p string : string tells which preprocessors to run
               e - [n]eqn(1)   p - pic(1)    t - tbl(1)
               g - grap(1)     r - refer(1)  v - vgrind(1)
```

### Help

```sh
# Not available in zsh
help COMMAND
```

```sh
help: help [-s] [pattern ...]
    Display helpful information about builtin commands.  If PATTERN is
    specified, gives detailed help on all commands matching PATTERN,
    otherwise a list of the builtins is printed.  The -s option
    restricts the output for each builtin command matching PATTERN to
    a short usage synopsis.
```

## Identify

Find out what and where something is.

```sh
which COMMAND
type COMMAND
```

For example:

```sh
$ which ls
/bin/ls

$ type -a ls
ls is aliased to `ls -G'
ls is /bin/ls
```
