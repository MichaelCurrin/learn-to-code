# Bash settings files

From article [here](https://serverfault.com/questions/261802/what-are-the-functional-differences-between-profile-bash-profile-and-bashrc).

## Terms

- *login shell* - When you login with username and password directly on the machine or you connect remotely via SSH.
- *subshell* - When you start a new shell process in the current shell. e.g. when you type `bash` or `/bin/bash` in the console.


## User files

### Purpose

- `.profile` - One time setup for shell, not `bash` specific - this existed before bash. Contains environment variables like `PATH`.
- `.bashrc` - Configure bash interactive shell usage.
- `.bash_profile` - Can be used to load `.profile` and `.bashrc`.
    e.g.
    ```bash
    . ~/.profile
    . ~/.bashrc
    ```

### Run condition

The profile files are read for a login shell. `.profile`, `.bash_profile`. 

The RC file is for a subshell.

Mac terminal GUIs might use `.bash_profile` or `.bashrc`.


## Root files

Read before `.profile`: `/etc/bash_profile` (fallback `/etc/profile`) 
