# Git Tips

## Configuration

### Levels

Referenced from this [article](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup).

There are three places to store configuration variables. The more specific lower levels override the high levels.

Configuration variables can be stored in three different places.

* `/etc/gitconfig` file: contains values values for every user on the system and all their repositories. Access with `--system` flag.
* `~/.gitconfig` or `~/.config/git/config` file: User file. Access with `--global` flag.
* `~/repoName/.git/config` file: settings specific to the repo.


### Account

For first time git configuration, set values separately.
```
$ git config --global user.name "First Last"
$ git config --global user.email user@domain.com
$ git config --global core.editor nano
```

Edit the whole files of values.
```
$ git config --global -e
# edit in text editor and save
```

View account values.
```
$ git config --global --list
user.name=someUser
user.emailuser@domain.com
core.editor=vim
```

This system file is not created by default but can be created by setting values at system level.
```
$ git config --system --list
fatal: unable to read config file '/etc/gitconfig': No such file or directory
```

Add aliases for git
```
$ git config --global -e
```
Add the following (from http://cheat.errtheblog.com/s/git).
```
[alias]
    st = status
    ci = commit
    br = branch
    co = checkout
    df = diff
    dc = diff --cached
    lg = log -p
    lol = log --graph --decorate --pretty=oneline --abbrev-commit
    lola = log --graph --decorate --pretty=oneline --abbrev-commit --all
    ls = ls-files

    # Show files ignored by git:
    ign = ls-files -o -i --exclude-standard
```
Test alias.
```
$ git lola
```

### Repo

View repo settings.
```
$ git config --list
user.name=someUser
user.email=user@domain.com
core.editor=vim
core.repositoryformatversion=0
core.filemode=true
core.bare=false
core.logallrefupdates=true
remote.origin.url=https://github.com/MichaelCurrin/bash.git
remote.origin.fetch=+refs/heads/*:refs/remotes/origin/*
branch.master.remote=origin
branch.master.merge=refs/heads/master
```

Configure repo settings.
```
$ git config -e
# edit in text editor and save
```
