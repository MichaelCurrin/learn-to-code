# Conditionals

## if

```
if condition
then
  statements
elif condition
then
  statements
elif condition
then
  statements
else
  statements
fi
```

Or like this:

```
if condition; then
  statements
elif condition; then
  statements
elif condition; then
  statements
else
  statements
fi
```

If, elif and else put together.
```bash
if [ "$a" = 'yes' ]
then
  echo 'Yes!'
elif [ "$a" = 'no']
then
  echo 'No...'
else
  echo "Sorry, '$a' was not recognised."
  exit 1
fi
```


It is recommended to always quote a variable in a condition.

Using this will evaluate the test as `if [ = 'yes' ]` and that will throw an error.
```
if [ $a = 'yes' ]
  echo 'Yes'
```

But using this will evalulate the test as `if [ '' = 'yes' ]`, which is fine.
```
if [ "$a" = 'yes' ]
  echo 'Yes'
```


## while

```
while condition
do
  statements
done
```

OR

```
while condition; do
  statements
done
```


```bash
#!/bin/bash

foo=1

while [ "$foo" -le 20 ]
do
  echo "Here we go again"
  foo=$(($foo+1))
done
```


## until

This is a reversed form of the while loop. The loop continues while it the condition is false ie. until the condition becomes true.

```
until condition
do
  statements
done
```

For example, an alarm which alerts when a user logs in.

```bash
#!/bin/bash

until who | grep "$1" > /dev/null
do
  sleep 60
done

echo -e \\a
echo "***** $1 has just logged in ****"
```

## case


Match contents of a variable against patterns.

```
case variable in
  pattern [ | pattern] ...) statement;;
  pattern [ | pattern] ...) statement;;
  ...
esac
```

Basic example:
```bash
#!/bin/bash
echo "Yes or No?"
read value

# * will match all possible strings.
case "$value" in
  "yes") echo "Yes!";;
  "no" ) echo "No...";;
  "y"  ) echo "Yes!";;
  "n"  ) echo "No...";;
  *    ) echo "Sorry, not recognised.";;
esac
```

Putting patterns together 

```bash
#!/bin/bash
echo "Yes or No?"
read value

# * will match all possible strings.
case "$value" in
  "yes" | "y" | "Yes" | "YES" ) echo "Yes!";;
  "no" | "n" | "No" | "NO" ) echo "No...";;
  * ) echo "Sorry, not recognised.";;
esac
```

Executing multiple statements:
```bash
#!/bin/bash
echo "Yes or No?"
read value

# * will match all possible strings.
case "$value" in
  "yes" | "y" | "Yes" | "YES" ) 
    echo "Yes."
    echo "Definitely!"
    ;;
  "no" | "n" | "No" | "NO" ) ) 
    echo "No..."
    ;;
  * ) 
    echo "Sorry, not recognised."
    echo "Please answer yes or no."
    exit 1
    ;;
esac
```


The conditions could be more elegant as

- yes: `[yY] | [yY][eE][sS]`
- no: `[nN] | [nN][oO]`


## Lists

Note that the statements below could be conditions, but they could also be other commands, which return 0 for success (true) or another code for failure (false).

### AND

```
statementA && statementB && statementC
```

### OR

```
statementA || statementB || statementC
```

### Combine statements

The AND and OR lists lists and can be used for short if else logic.

For example, check if a file exists (result is 0 for success), then do the command for true, otherwise, go straight for the command for false part.
```
[ -f file_one ] && command for true || command for false
```

### Statement block

If you want to use multiple statemetns in a place where only one is allowed in an AND or OR list, you can enclose it in braces `{}`.

```bash
get_confirm && {
    grep -v "cdcatnum" $tracks_file > $temp_file
    cat $temp_file > $tracjes_file
    echo
    add_record_tracks
}

```
