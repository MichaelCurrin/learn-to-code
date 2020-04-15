# Executing

## Binaries

Note in Unix programming, we refer to `bin` (binary). This traditionally means compiled executed binary but is used more generally for executable scripts. These may be compiled binary files. Or a text file with a shebang indicating the language to use. 

Note that an extension may or may not be used, but it has no impact on how the script runs. It may help with syntax highlighting in your IDE though or when searching for file with a certain extension.

## Bash shebangs

Include a _shebang_ in the first line of a file.

Recommended:

- The most common
    - `#!/bin/bash`
- More flexibility on different systems.
    - `#!/usr/bin/env bash`
- Gives you explicit control on a given system of what executable is called
    - `#!/usr/bin/bash`     
    
[source](http://stackoverflow.com/questions/16365130/the-difference-between-usr-bin-env-bash-and-usr-bin-bash)

Other options, not recommend

- Use `#!/bin/sh`
    - The results an unpredictable. On some systems, this will be aliased to `bash` or `dash`.
- Omit the shebang 
    - The current shell will be used. this may lead to unexpected results.
    - e.g. Executing a script written for Bash from within ZSH shell in the terminal.


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

### Execute a script in the user's bin directories

How to use your user's `~/bin` director.

Benefits include:

- Not shared by other users.
- Will not get overridden by updating programs or your operating system.

This is common, but just not part of the standard installation. So follow steps below to set it up.

#### Test userbin directory

Create it.

```sh
$ mkdir ~/bin
```

Update `PATH` to include your user's `bin` directory at the start.

In `.bashrc`, set this.

```
export PATH="$HOME/bin:$PATH"
```

#### Run user bin script

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

Example contents:

```sh
cd ~/Documents/scripts
source virtualenv/bin/activate
```

Here we use `source` to run the contents on a shell script in the current process. Any changes to virtual environment or directory will be persisted.

```sh
source scriptname.sh
```

Here we run the script as a subprocess. So we do **not** perist and changes to the current directory or virtual environment which the script makes.

```sh
bash scriptname.sh
# OR if it an executable
./scriptname.sh
```

### Execute without changing directory

Sometimes you need to be in a different directory to execute a script correctly, but you don't want to stay that directory afterwards. 

But if you use **brackets** around the commands, you use a subprocess such that your directory does not change outside the command.

```sh
$ cd ~/Foo
$ (cd Bar && ./baz.sh)
$ pwd
/home/my-user/Foo
```
