# Directory Structure

Some info on the structure of the Linux OS. See further details on the [Filesystem Hierarchy Standard](https://en.wikipedia.org/wiki/Filesystem_Hierarchy_Standard) page.


## bin

The `bin` directories are standard places where system programs are stored. 

They files which can be executed and are usually in a binary format i.e. the files are compiled and you won't see their source code if you view them in a text editor. You can navigate to the directory and list the binary files there, or use the `--help` argument on a file to see what it does. 

You can put a text file (e.g. `.sh` or `.py`) in a `bin` directory and it can be executed - see [execution tutorial](execution.md) for more info.

Bin directory paths:

- System
    + `/bin` - Binaries, programs used on boot. These are used at an early stage when booting in single-user mode, before the `/usr` partition is mounted. Contains files like e.g. `cat`, `ls`, `etc`.
    + `/sbin` - System binaries which require root privileges to run.
    + `/usr/bin` - Local binaries, programs specific to an installation.
    + `/usr/local/bin` - User binaries, available system-wide to multiple users.
- User
    + `~/bin` - Binaries for a specific user. This might be empty, though it should be in your $PATH variable.
    + `~/.local/bin` - Binaries for a specific user as well, but less conventional. The `~/.local` directory should exist on your system, but `bin` within that should still be created and added to your `$PATH` if you intend to use it. I personally use this location since coming across someone else who uses it.


## usr

Multi-user applications and utilities.

```bash
/usr
/usr/local
```

Files in the first location above could be overwritten on an OS upgrade, while files in the second are preserved.



## library files

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

