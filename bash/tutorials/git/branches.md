# Git branches

Thanks to some useful tips shown on http://cheat.errtheblog.com/s/git


## List

Show local branches.
```
$ git branch
```

Show remote branches.
```
$ git branch -r
```

Show all branches.
```
$ git branch -a
```


## Create

Create a new branch at the same point in the current branch. Add an optional starting point referencing a branch name or tag name.
```
$ git branch <name>

$ git branch <name> <start-point>
```

Create a branch and switch to it in one command.
```
$ git checkout -b <name>
```
