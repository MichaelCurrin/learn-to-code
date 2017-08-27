#!/bin/bash
# Script to show basic usage of arguments in bash scripting.

# Usage:
#   Run this script with arbitrary arguments then read the output.
#   For example:
#     $ bash args.sh -f
#     $ bash args.sh A B
#     $ bash args.sh 1 2 3 4
#     $ bash args.sh oneWordArg "multi word arg"

echo count $#
echo 0 $0
echo 1 $1
echo 2 $2
echo 3 $3

# Note that the some other logic or getopts is required to neatly separate flags.
# So for basic use, it is recommended to ignore flags and to just use your
# input arguments directly and in order.

# See Stack Overflow:
# * http://stackoverflow.com/questions/192249/how-do-i-parse-command-line-arguments-in-bash
# * http://stackoverflow.com/questions/18003370/script-parameters-in-bash
