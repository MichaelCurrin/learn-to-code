# Help

Methods of getting help


## Bash


### Help

Replace COMMAND with bash command.

```
$ help COMMAND

$ COMMAND --help
```

The above are not equivalent. For example:
```
$ help ls
bash: help: no help topics match `ls'.  Try `help help' or `man -k ls' or `info ls'.
$ ls --help
Usage: ls [OPTION]... [FILE]...
List information about the FILEs (the current directory by default).
Sort entries alphabetically
...


$ help cd
cd: cd [-L|[-P [-e]] [-@]] [dir]
    Change the shell working directory.

    Change the current directory to DIR.  The default DIR is the value of the
    ...
    ...
$ cd --help
bash: cd: --: invalid option
cd: usage: cd [-L|[-P [-e]] [-@]] [dir]


$ help du
Usage: du [OPTION]... [FILE]...
  or:  du [OPTION]... --files0-from=F
Summarize disk usage of the set of FILEs, recursively for directories.
...
...
$ du --help
# same as above

```


### Info

```
$ info COMMAND
```


### Manual

```
# Read the manual for a command.
$ man COMMAND

# Search the manual pages for short keyword or description.
# You will usually get multiple rows of results.
$ man -k SEARCH TERMS
# e.g.
$ man -k boot
$ man -k send mail

```


### Meta help

How to learn how to get documentation.
```
$ help help


$ man --help
Usage: du [OPTION]... [FILE]...
  or:  du [OPTION]... --files0-from=F
Summarize disk usage of the set of FILEs, recursively for directories.
...

# Info main menu
$ info

# Manual for info.
$ info man
```

### Short descriptions

```
$ whatis ps
ps (1)               - report a snapshot of the current processes.

$ whereis ps
ps: /bin/ps /usr/share/man/man1/ps.1.gz
```


## Python


```
$ python
>>> import os
>>> help(os.path)
>>> print os.path.__doc__

# Get help on a module you haven't imported yet
>>> help('json')

$ ipython
>>>
>>> os.path?<enter>
# returns properties and doc string
>>> os.path??<enter>
# as previous one but open a new view (Q to exit) and importantly it
# shows you the original code of the module / function / class.


```