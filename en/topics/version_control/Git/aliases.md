# Git Aliases

## Add aliases

Referenced from this [article](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup).

Edit global `git` config.

```sh
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

Note that aliases do not need to be reloaded - they are available immediately in the terminal after any updates.

Test an alias.

```sh
$ git lola
```

## View aliases

Enable once.

```sh
git config --global alias.alias "! git config --get-regexp ^alias\. | sed -e s/^alias\.// -e s/\ /\ =\ /"
```

Run.

```sh
git alias
```

[source](https://stackoverflow.com/questions/7066325/list-git-aliases)
