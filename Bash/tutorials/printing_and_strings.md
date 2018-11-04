# Printing and strings

Using double quotes preserves spaces in a file or directory or variable name.

```bash
$ touch Underscores_in_name.txt

# Unquoted and unescaped, this will give 3 files which is probably not what you want, so don't do it.
# touch Spaces in name.txt

$ touch 'Spaces in name.txt'
# Which is the same as this.
$ touch Spaces\ in\ name.txt


# Get error.
$ X=Spaces in name.txt
bash: in: command not found

# Therefore escape or quote when assigning variable.
$ X='Spaces in name.txt'

# Error. Attempts to use each part of the string split by spaces as a list.
$ cat $X
cat: Spaces: No such file or directory
cat: in: No such file or directory
cat: name.txt: No such file or directory

# Correct.
$ cat "$X"
Spaces in name.txt
```
