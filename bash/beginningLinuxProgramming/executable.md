# Making A Script Executable

Excute with the shell.
```
$ /bin/bash script.sh
```

Make it executable.
```
$ chmod +x script.sh
$ ./script.sh
```

If the command is for you only, add it to
```
cp script.sh ~/bin/
```

To make it executable for other users, add it to root's local bin dir.
```
sudo cp script.sh /usr/local/bin/
sudo chown root /usr/local/bin/script.sh
sudo chgrp root /usr/local/bin/script.sh
chmod 755 /usr/local/bin/script.sh
```


## Change access

Use command `chmod` i.e. "change file mode bits"

For more details, see the man page for chmod. Or check https://www.computerhope.com/unix/uchmod.htm


### Users

Order is `ugo`
* u is user
* g is users in group
* o is other

Where a number from 0-7 is placed in place of each letter.

### Permissions

These can be combined in any combination.
* r is read
* w is write
* x is execute

But then resolve down single digit presenting binary sum of 000 (i.e. 0) through to 111 (i.e. 7)

Some key single digit values (0 to 3 are possible but not practical)
* 4 => 100 => read only
* 5 => 101 => read and execute
* 6 => 110 => read and write
* 7 => 111 => read, write and execute

### Apply

Example
```
$ chmod u=rwx,g=rx,o=r myfile.sh

# which is equivalent to
$ chmod 754 myfile.sh
```
