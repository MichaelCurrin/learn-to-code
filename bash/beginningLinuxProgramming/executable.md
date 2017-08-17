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



## chmod

For more details, see the man page for chmod. Or check https://www.computerhope.com/unix/uchmod.htm


Users

* u is user
* g is group
* o is other

Permissions

* r is read
* w is write
* x is execute



Example
```
$ chmod u=rwx,g=rx,o=r myfile
```

But `rwx` map to binary value range 000 (i.e. 0) to 111 (i.e. 7)

Therefore using octal permissions.
```
$ chmod 754 myfile
```

Where
* other value => 4 => 100 => read only
* group value => 5 => 101 => read and execute
* user value => 7 => 111 => read, write and execute

And potentially 6 => 110 => read and write
