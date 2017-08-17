# Aliases

Add shortcuts to bash functions with options set.

## How to

Add aliases to `~/.bashrc` or `~./bash_aliases` or root's `/etc/bash_aliases` file,  

If using bash_aliases, set this in `~/.bashrc`.
```
# Alias definitions.
# You may want to put all your additions into a separate file like
# ~/.bash_aliases, instead of adding them here directly.
# See /usr/share/doc/bash-doc/examples in the bash-doc package.

if [ -f ~/.bash_aliases ]; then
   . ~/.bash_aliases
fi
```

## Additions

Here are some recommended aliases. You can this md file as a quick reference if you have them set already.

System-wide bash aliases
```
alias ls='ls --color=auto'  # Add it here because default /root/.bashrc does not
alias ll='ls -l'
alias la='ls -A'
alias l='ls -CF'
```

Force interactive mode to avoid making mistakes.
e.g. get confirmation before deleting
```
alias rm='rm -i'
alias cp='cp -i'
alias mv='mv -i'
```

Other
```
alias h='history'
alias j="jobs -l"
alias c="clear"
alias m="less"
alias pu="pushd"
alias po="popd"
alias s="sudo"
```
