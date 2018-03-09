# Execution

## Basic execution

Create a text file.

```bash
$ cd myDir
$ nano script.sh
```

Insert the following:

```
echo "Hello world!"
```

Execute it with the shell.

```bash
$ source script.sh
Hello world!
# or
$ bash script.sh
Hello world!
```


## Make it executable

Add the following to the first line:

```bash
!/bin/bash
```

Give the script executable permissions for the owner.

```bash
$ chmod +x script.sh
```

Execute it from the current directory.

```bash
$ ./script.sh
```


## Execute it from anywhere

Check which directories are in your user's PATH variable The shell will look for executable _binary_ files (e.g. `ls`, `cp`) or scripts (e.g. `.sh`, `.py`) in those directories when it receives a command.

```bash
$ echo $PATH
/home/michael/bin:/usr/local/bin:/usr/bin:/bin:/usr/local/games:/usr/games
```

The first two paths matter to us for this lesson.
* User's bin dir- `/home/michael/bin` i.e. `~/bin`
* Shared bin dir - `/usr/local/bin`

Do either of the following:

* Move the file to your user's bin directory to make it available for _only your user_.
```bash
$ mv script.sh ~/bin/
```
* Or, make it available for _all users_. Make it owned by root user and root group and give it executable permissions for users who are not the owner.
```bash
$ sudo mv script.sh /usr/local/bin/
$ sudo chown root:root /usr/local/bin/script.sh
$ chmod 755 /usr/local/bin/script.sh
```

Using either of the above, your user can now execute the script from anywhere.

```bash
$ cd ~/Documents
$ script.sh
Hello world!
```
