# Variables

## Environment variables

List the environment variables.
```bash
$ env
KDE_MULTIHEAD=false
GS_LIB=/home/michael/.fonts
KDE_FULL_SESSION=true
LS_COLORS=
...
```

List variables available in the current shell terminal.
```bash
$ export
declare -x COLORFGBG="15;0"
declare -x COLORTERM="truecolor"
declare -x DBUS_SESSION_BUS_ADDRESS="unix:path=/run/user/1000/bus"
...
```

Explanations:

- `$HOME` - Home directory of the current user
- `$PATH` - A colon-separate list of directories to search for commands.
- `$PS1` - A command prompt. Usually `$`.
- `$PS2` - A secondary prompt, used when prompting for additional input. Usually `>`.
- `$IFS` - Input field separator. A list of characters which are used to separate words when the shell is reading input, usually space, tab and newline characters.
- `$0` - The name of the shell script. If used in the terminal this will give `/bin/bash`, otherwise the path to file relative to the current working directory. e.g. For the command `$ bash ../bashScripting/args.sh`, that script will output `$0` as "../bashScripting/args.sh".
- `$#` - The number of parameters passed. Defaults to zero.
- `$$` 0 The process ID of the shell script, often used inside a script for generating temporary filenames, for example `/tmp/junk_$$`.

Use `echo` and the name to print the value.

## Parameter variables

If the script is invoked with parameters, some additional variables are created.

- `$1`, `$2`, etc. - The parameters given to the script.
- `$?` - A list of all the parameters in a single variable, separated by the first character in the environment variable **IFS**.
- `$@` - A subtle variation on the `$?`, which doesn't use the **IFS** environment variable.

```bash
$ set foo bar bam
$ echo "$0"
/bin/bash
$ echo "$1"
foo
$ echo "$@"
foo bar bam
$ echo "$*"
foo bar bam
$ IFS=':'
$ echo "$*"
foo:bar:bam
$ # Note that quotes are important here otherwise you get an unexpected result.
$ echo $*
foo bar bam
```


## Input

```bash
#!/bin/bash
salutation="Hello"
echo $salutation

echo "Please enter a new greeting"
read salutation
echo $ salutation
```

salutation='x'; echo $salutation; read salutation; echo $salutation
