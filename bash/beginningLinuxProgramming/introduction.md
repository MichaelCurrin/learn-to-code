# Introduction

Based on the book
    Beginning Linux Programming (Worx Press) by Neil Matthew & Richard Stones


## Structure

### bin

Standard places where system programs are stored.
```
/bin # binaries, programes used on boot
/usr/bin # user binaries, standard programs available to users
/usr/local/bin # local binaries, programs specific to an installation
```

### usr

On an upgrade
```
# It seems files in here could be overwritten.
/usr
# While files here are preserved.
/usr/local

# But his requires more research to confirm.
```

Header files for C
```
/usr/include
/usr/include/sys
/usr/include/linux
```


Get help on the GNU C Compiler

```
$ man cc
$ info cc
```


### library files

Collections of precompiled functions to be resuable. Typically consists
of a sets of related functions to perform a common task.
```
/lib
/usr/lib
```



## Redirecting

### Redirecting output

```
# Split stdout and std error to two files.
$ command > stdout.txt 2> stderr.txt

# Send both to same place.
$ command > stdout.txt 2>&1

# discard entire output
$ comand > /dev/null 2>&1
```

### Redirecting input

```
# Output contents of file.
$ more < file.txt

# Exceute query.
$ sqlite3 myDatabase.db < myQuery.sql
```

### Piping

```
$ echo "SELECT * FROM myTable;" | sqlite3 myDatabase.db

$ grep -irn abc | sort
```
