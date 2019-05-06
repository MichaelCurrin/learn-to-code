#!/bin/bash
# Based on https://stackoverflow.com/questions/39528273/split-a-comma-separated-strings-in-bash

FRUITS=apple,banana,kiwi,orange
FRUITS2=$(echo "$FRUITS" | tr ',' '\n')

echo $FRUITS
echo
echo $FRUITS2
echo

for F in $FRUITS2;
do
    echo "I like $F"
done;
