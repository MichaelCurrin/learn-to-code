# Introduction

From the introduction chapter.

## Structure

### bin

Standard places where system programs are stored.
```bash
# Binaries, programs used on boot
/bin
# User binaries, standard programs available to users
/usr/bin
# Local binaries, programs specific to an installation
/usr/local/bin
```

### usr

On an OS upgrade
```bash
# From what I've read, it seems files in here could be overwritten.
/usr
# While files here are preserved.
/usr/local

# But citation is needed.
```

### library files

Collections of precompiled functions to be resuable. Typically consists
of a sets of related functions to perform a common task.

```bash
/lib
/usr/lib
```

Header files for C

```bash
/usr/include
/usr/include/sys
/usr/include/linux
```


## Redirection

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
