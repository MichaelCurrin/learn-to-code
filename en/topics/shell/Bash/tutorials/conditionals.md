# Conditionals

You can try this section as scripts you run or by pasting commands in the terminal.

## Booleans

### If

See Stack Overflow - [How to declare and use boolean variables in shell script?](https://stackoverflow.com/questions/2953646/how-to-declare-and-use-boolean-variables-in-shell-script)

```bash
#!/bin/bash
X=true
Y=false

if [ "$X" = true ]; then
  echo "Yes"
else
  echo "Nope"
fi
```

### Else if

```
#!/bin/bash
 
if [ "$X" = true ]; then
    echo "True!"
elif [ "$X" = false ]; then
    echo "False!"
fi
```

## One line conditional

Print result.
 
```bash
true && echo 'It worked!' || echo 'It failed'

false && echo 'It worked!' || echo 'It failed'
```

Store result.

```bash
RESULT=$(true && echo 'It worked!' || echo 'It failed')

RESULT=$(false && echo 'It worked!' || echo 'It failed')
```

Exit on failure.

```bash
echo 'About to try something that won't work'
false && echo 'It worked!' || (echo 'It failed' ; exit 1)
echo 'This line won't run.'
```
