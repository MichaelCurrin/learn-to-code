# Debugging

## Verbosity

You can set bash verbosity mode on, so that all received commands are repeated on stdout before the result of the command.

```bash
$ # Set verbose on (yes, with a minus sign)
$ set -v
$ ls
ls
abc.py xyz.sh
$ echo Verbosity is now on.
echo Verbosity is now on.
Verbosity is now on
$ set +v
set +v
$ ls
abc.py xyz.sh
$ echo Verbosity is now off.
Verbosity is now off.
```

This can be useful to see the commands executed in a shell script to better understand what it is doing or which line it is failing on. I don't see a use for myself currently to have verbosity on for just command-line use. 
Except for the case of using a command to repeat the last argument of the previous line. But even then, verbosity seems to be set on automatically but just temporarily, so one does not have to worry about setting it.

For example:
```bash
$ ls ~/Documents
myDir myFile.py text.txt
$ ls !!:$
ls ~/Documents
myDir myFile.py text.txt
$ cd !!:$
cd ~/Documents
$
```
