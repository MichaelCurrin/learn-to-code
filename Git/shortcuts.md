# Git Shortcuts

Referenced from this [article](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup).

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
