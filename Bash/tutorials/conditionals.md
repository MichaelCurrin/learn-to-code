# Conditionals

See Stack Overflow - [How to declare and use boolean variables in shell script?](https://stackoverflow.com/questions/2953646/how-to-declare-and-use-boolean-variables-in-shell-script)

```bash
#!/bin/bash
X=true
Y=false

if [ "$X" = true ]
  then
    echo "Yes"
  else
    echo "Nope"
fi
```
