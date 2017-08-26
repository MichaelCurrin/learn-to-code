#!/bin/bash

# Search for files matching a string and output contents.

# A more efficient way would be
#   $ term=help
#   $ more `grep -l $term *`
#   OR
#   $ more $(grep -l $term *)
#
# While this would output names of the files which have contents matching pattern.
#   $ grep -l $term * | more


term=help

for file in *
  do
    if grep -l $term $file
      then
        more $file
    fi
done
