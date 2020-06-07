# Bash settings files

From article [here](https://serverfault.com/questions/261802/what-are-the-functional-differences-between-profile-bash-profile-and-bashrc).


## Terms

- *login shell* - When you login with username and password directly on the machine or you connect remotely via SSH.
- *Subshell* - When you start a new shell process in the current shell. e.g. when you type `bash` or `/bin/bash` in the console.


## User files

### Purpose

- `.bashrc` - Configure bash interactive shell usage.
- `.profile` - One time setup for shell, not `bash` specific - this existed before bash. Contains environment variables like `PATH`.
- `.bash_profile` - Can be used to load `.profile` and `.bashrc`.
    e.g.
    ```bash
    . ~/.profile
    . ~/.bashrc
    ```

### When they are run

The "profile" files are read for a login shell.

According to comment in `.profile` in Bash 5:

> This file is not read by bash(1), if ~/.bash_profile or ~/.bash_login exists.

The RC file is for a subshell.


## Root files

Read before `.profile`: `/etc/bash_profile` (fallback `/etc/profile`) 
