# Executing

## Binaries

Note in Unix programming, we refer to `bin` (binary). This traditionally means compiled executed binary but is used more generally for executable scripts. These may be compiled binary files. Or a text file with a shebang indicating the language to use. 

Note that an extension may or may not be used, but it has no impact on how the script runs. It may help with syntax highlighting in your IDE though or when searching for file with a certain extension.

## Bash shebangs

Include a shebang in the first 2 lines of a file so that is 

See http://stackoverflow.com/questions/16365130/the-difference-between-usr-bin-env-bash-and-usr-bin-bash

- The most common
    - `#!/bin/bash`
- More flexibility on different systems.
    - `#!/usr/bin/env bash`
- Gives you explicit control on a given system of what executable is called
    - `#!/usr/bin/bash`     

You can also use `#!/bin/sh` but the results an unpredictable. On some systems, this will be aliased to `bash` or `dash`.

## How to execute

If a directory is in your shell `PATH` variable, the shell will look for executables in those paths, in order from left to right. Note that the files in those directories must have _executable_ permissions for your current user in order work. 

Also directories can be added to path even if they do not exist and there will be no errors.

```sh
$ echo $PATH
```

Here is simplified output:

```
/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
```

### Execute a script the default bin directories

You should already have these in `PATH`.

- `/usr/bin` 
    - shared by users
    - avoid adding scripts here
    - [read more](http://www.linfo.org/bin.html)
- `/usr/local/bin` 
    - shared by users
    - custom installations
    - you can add or edit scripts here, but they will be accessible by other users and changes may get lost when you run updates to packages or your operating system.
- `/usr/sbin` 
    - shared by users
    - system
    - avoid adding scripts here
- `/bin`
  - for root user
  - avoid adding scripts here
- `/sbin` 
  - system
  - for root user
  - avoid adding scripts here

You can use `ls` to see what is in there.

Then run one of the scripts.

**Example**

I have `grunt` local path path. I can confirm this:

```sh
$ which grunt
/usr/local/bin/grunt
```

And I can run it from anywhere.

```sh
$ grunt
```

### Execute a script in the use's bin directories

If you want to use your own user's `~/bin` directory, this is common, but just not part of the standard installation. 

Benefits include:

- Not shared by other users.
- Will not get overridden by updating programs or your operating system.

Create it.

```sh
$ mkdir ~/bin
```

Update `PATH` to include your user's `bin` directory at the start.

In `.bashrc`, set this.

```
export PATH="$HOME/bin:$PATH"
```

Place a file in your user's `bin` dir and make it executable. Then you can call it from anywhere. Alternatively, place a symlink to an existing file in the bin dir.

```sh
$ cd ~/bin
$ cat myFile # example contents below
#!/bin/bash
echo "It works from bin!"

$ chmod +x myFile

$ cd ~/Documents/
$ myFile
It works from bin!
```

### Changes in state due to execution

Consider a script `scriptname.sh` which activates a virtualenv env and changes directories.

```sh
$ cat scriptname # example contents below
cd ~/Documents/scripts
source virtualenv/bin/activate
```

To run the script and continue from virtualenv and directory in use when the script finishes.

```sh
source scriptname.sh
```

To run script but continue from the original virtualenv state and directory from before the script ran.

```sh
bash scriptname.sh
# OR
scriptname.sh
# OR
./scriptname.sh
```

### Execute from another directory

Within a subprocess, change directory and execute file, while the outer process does not change directory. Use brackets.

```sh
$ (cd Foo && ./bar.sh)
```
