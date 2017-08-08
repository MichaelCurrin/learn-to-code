# Bash Profiles

Here are some recommended settings for bash console.

If you want to test something temporarily for the terminal session, you can run it directly. 
If you want it be loaded on all new terminal sessions, then add it to your `~/.bashrc` file.

## Command prompt decorator

Standard value on Debian, as set in root's `/etc/bash.bashrc` file.
```
# set a fancy prompt (non-color, overwrite the one in /etc/profile)
PS1='${debian_chroot:+($debian_chroot)}\u@\h:\w\$ '
```

Settings I found on PythonAnywhere's user `.bashrc` file.
```
# Show current git branch in prompt.
function parse_git_branch {
git branch --no-color 2> /dev/null | sed -e '/^[^*]/d' -e /* \(.*\)/(\1)/'
}

# Set colour shortcuts.
RED="\[\033[0;31m\]"
YELLOW="\[\033[0;33m\]"
GREEN="\[\033[0;32m\]"
LIGHT_GREEN="\[\033[1;32m\]"
LIGHT_GRAY="\[\033[0;37m\]"

# This includes the name of current git branch. This depededs on the two areas above.
PS1="$LIGHT_GRAY\$(date +%H:%M) \w$YELLOW \$(se_git_branch)$LIGHT_GREEN\$ $LIGHT_GRAY"
```

## Other

The following are other useful areas from PythonAnyhwere.com's configuration.
```
# Load up standard site-wide settings (choose one depending on your system).
source /etc/bashrc
source /etc/bash.bashrc
```

```
# Remove duplicate entries from history.
export HISTCONTROL=ignoreboth
```

```
# Load virtualenvwrapper - this might be necessary if you this.
source virtualenvwrapper.sh &> /dev/null
```
