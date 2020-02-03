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

## Merging

See article at https://git-scm.com/book/en/v2/Git-Branching-Basic-Branching-and-Merging

Ensure your remote tracking is up todate.

```
$ git fetch
```

After creating a feature (or develop) branch, it can diverge from master. Then you can bring changes from the feature branch with a merge and commit.

```
$ git checkout master
$ git merge origin/my-feature
$ git branch -d features # delete branch if it's no longer needed.
```

Or you can bring changes in master (or develop) into feature. Either regularly so features gets the changes from master, or once off just before features in merged into master.

```
$ git checkout my-feature
$ git merge origin/master
```
