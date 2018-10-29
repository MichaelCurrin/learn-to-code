# For Loops


Search for files matching a string and output contents.

This can be done all at once in a script.

```bash
#!/bin/bash

# Iterate through 3 strings.
for foo in bar fud 43
do
  echo $foo
done
#=> bar
#=> fud
#=> 43

# Iterate through a list which is a single quoted string
for foo in "bar fud 43" last
do
  echo $foo
done
#=> bar fud 43
#=> last
```


```bash
#!/bin/bash

term='phrase to search for'

for file in *
do
  if grep -l $term $file
    then
      more $file
  fi
done
```

Or it can be done interactively, where the shell will wait for user to quit viewing the current file (`q` to exit `more`) and then continue.

```bash
$ term='phrase to search for'
$ for file in *
> do
> if grep -l $term $file
> then
> more $file
> fi
> done
```

Note that if you press the up arrow after that is executed, you will see that last command in the history as:
```bash
$ for file in *; do if grep -l $term $file; then more $file; fi; done
```


This will give the results in a paginated view. Press enter in this view to scroll down.
```bash
$ more $(grep $term *)
::::::::
filenameA
::::::::
contents
::::::::
filenameB
::::::::
contents
...
```


This will output names of the files which have contents matching the pattern.
```
$ grep -l $term * | more
```

Grep help says the following:
>-l, --files-with-matches  print only names of FILEs containing matches
