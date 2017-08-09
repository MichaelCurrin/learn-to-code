# Executing

## Bash shebangs

Include a shebang in the first 2 lines of a file so that is 

See http://stackoverflow.com/questions/16365130/the-difference-between-usr-bin-env-bash-and-usr-bin-bash

Seems to be most common.
`#!/bin/bash`

Lends you some flexibility on different systems
`#!/usr/bin/env bash`

Gives you explicit control on a given system of what executable is called
`#!/usr/bin/bash`     


## How to execute

### User bin dir

Place a file in your user's bin dir and make it executable . Then you can call it from anywhere. Alternatively, place a symlink to an existing file in the bin dir.

```
$ cd ~/bin
$ cat myFile # example contents below
#!/bin/bash
echo "It works from bin!"

$ chmod +x myFile

$ cd ~/Documents/
$ myFile
It works from bin!
```

### Changes in state due to execution

Consider a script `scriptname.sh` which activates a virtualenv env and changes directories.
```
$ cat scriptname # example contents below
cd ~/Documents/scripts
source virtualenv/bin/activate
```

To run the script and continue from virtualenv and directory in use when the script finishes.
```
source scriptname.sh
```

To run script but continue from the original virtualenv state and directory from before the script ran.
```
bash scriptname.sh
# OR
scriptname.sh
# OR
./scriptname.sh
```
