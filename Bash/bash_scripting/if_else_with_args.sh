#!/bin/bash
# Showcase conditionality applied to args.

usage() {
    echo "Usage: "
    echo " $ $0 [args...]"
    echo
    echo " e.g. "
    echo " $ $0"
    echo " $ $0 a b c"
    echo
}

firstTest="a"

echo "There were $# arguments supplied."

if [ "$#" -eq 0 ]
  then
    usage
    exit 1
fi

echo 'All arguments'
echo "$@"
echo

echo "Does 1st argument equal to configured word '$firstTest'?"
# This also works as `"$1" == a` or as `$1 == "a"`
if [ "$1" == $firstTest ]; then
    echo "- yes"
else
    echo "- no"
fi
echo

echo "What is 2nd arg?"
# Based on http://stackoverflow.com/questions/6482377/check-existence-of-input-argument-in-a-bash-shell-script
if [ ! -z "$2" ]; then
    echo "- $2"
else
    echo "- not set"
fi
echo

echo "Is b in the args?"
# https://superuser.com/questions/186272/check-if-any-of-the-parameters-to-a-bash-script-match-a-string
# Needs double brackets.
if [[ "$@" == *"b"* ]]; then
    echo "- yes"
else
    echo "- no"
fi
