# Aliases

Here are some recommended aliases to include in root's `/etc/bash_aliases` file. Use this file as a reference if you have them set already.

```
# System-wide bash aliases usually sourced from ~/.bash_aliases

alias ls='ls --color=auto'  # Add it here because default /root/.bashrc does not
alias ll='ls -l'
alias la='ls -A'
alias l='ls -CF'

# Some more alias to avoid making mistakes:
alias rm='rm -i'
alias cp='cp -i'
alias mv='mv -i'

# short commands
alias h='history'
alias j="jobs -l"
alias c="clear"
alias m="less"
alias pu="pushd"
alias po="popd"
alias s="sudo"

```
