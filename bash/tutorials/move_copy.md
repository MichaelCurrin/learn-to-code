# Move and Copy

Given `A` is an existing directory.
And`B` does not yet exit.


Use `-v` for the verbose flag to see what is being done.

Copying a directory must be done recursively.
```
# Use -R
$ cp -R -v A B
‘A’ -> ‘B/A’
‘A/d’ -> ‘B/A/d’
‘A/d/d2’ -> ‘B/A/d/d2’
‘A/d/d2/file.txt’ -> ‘B/A/d/d2/file.txt’
‘A/e’ -> ‘B/A/e’

# No -R flag will give error.
$ cp -v A B
cp: omitting directory ‘A’
```

Use `-i` for the interfactive flag, do prevent overwriting.
```
# First time.
$ cp -i -R A B
...
# Second time.
$ cp -i -R A B
cp: overwrite ‘B/A/d/d2/file.txt’?
...
```
