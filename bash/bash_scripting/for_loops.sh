#!/bin/bash

# See https://www.cyberciti.biz/faq/bash-for-loop/

# for VARIABLE in 1 2 3 4 5 .. N
# do
#   command1
#   command2
#   commandN
# done

for i in 1 2 3 4 5
do
   echo "Value of i: $i"
done

echo

for TEXT in abc def efg
do
   echo "Value of text: $TEXT"
done
