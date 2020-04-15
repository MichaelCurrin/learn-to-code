#!/bin/bash
# Accessing bash command-line args

# https://stackoverflow.com/questions/12314451/accessing-bash-command-line-args-vs/12316565

# Convert to .md? But still run to be safe.
# Or just comment?

set -- "arg  1" "arg  2" "arg  3"

for word in $*; do echo "$word"; done
# arg
# 1
# arg
# 2
# arg
# 3

for word in $@; do echo "$word"; done
# arg
# 1
# arg
# 2
# arg
# 3

for word in "$*"; do echo "$word"; done
# arg  1 arg  2 arg  3

for word in "$@"; do echo "$word"; done
# arg  1
# arg  2
# arg  3
