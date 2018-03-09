#!/bin/bash

usage() {
    echo "Usage: "
    echo " $ $0 [word, word, ...]"
    echo " $ $0 fish b c"
    echo " $ $0 anything 2nd 3rd"
    echo " $ $0"
    echo
}

firstTest="fish"

echo "There were $# arguments supplied."

# Check for zero arguments supplied.
if [ "$#" -eq 0 ]
  then
    usage
    exit 0
fi

echo "All arguments are: $*"
echo

echo "Does 1st argument equal to configured word '$firstTest'?"
# This also works as `"$1" == fish` or as `$1 == "fish"`
if [ "$1" == $firstTest ]; then
    echo "- yes"
else
    echo "- no"
fi
echo

echo "What is 2nd arg?"
# Based on http://stackoverflow.com/questions/6482377/check-existence-of-input-argument-in-a-bash-shell-script
if [ ! -z "$2" ]
    then
        echo "- $2"
else
    echo "- not set"
fi

