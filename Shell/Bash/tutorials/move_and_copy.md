# Move and Copy
> Guide to `mv` and `cp` shell commands

### Move a file

Move to a directory. The filename will be the same.

```sh
mv foo.txt bar
```

Move and rename.

```sh
mv foo.txt bar/baz.txt
```

### Rename a file

If used in the same directory, you can use `mv` to rename a file.

```sh
mv foo.txt bar.txt
```

If you want to rename a file which is in a subdirectory:

You can navigate to the directory, do the move, then navigate back.

```sh
cd foo/bar
mv fizz.txt buzz.txt
cd ../.. 
# or simply cd -
```

Or you can type the path twice.

```sh
mv foo/bar/fizz.txt foo/bar/fizz.txt
```

Or more conventiently, use a **subshell**.

```sh
(cd foo/bar && mv fizz.txt buzz.txt)
```

### Copy directory


Copying a directory must be done _recursively_ using the `-R` flag.

```
     -R    If source_file designates a directory, cp copies the directory and the entire subtree connected at that point.
           ...

           In -R mode, cp will continue copying even if errors are detected.
```

Also, you can use the `-v` for the verbose flag to see what is being done.

**Example:**

Omitting `-R` when copying a directory will show an error.

```sh
$ cp -v Foo Bar
cp: omitting directory ‘Foo’
```

Using `-R`.

```sh
$ cp -R -v Foo Bar
‘Foo’ -> ‘Bar/Baz’
‘Foo/buzz.txt’ -> ‘Bar/buzz.txt’
```

## Interactive

Use `-i` for the interfactive flag, do prevent overwriting.

```sh
# First time.
$ cp -i -R A B
...
# Second time.
$ cp -i -R A B
cp: overwrite ‘B/A/d/d2/file.txt’?
...
```

