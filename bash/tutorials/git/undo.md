# Git Undo

Remove uncommited changes to a file.
```
$ git checkout -- path/to/file
```

Remove uncommited changes in repo.
```
$ git checkout
```

Discard commits in a private branch or throw away uncommited changes.
```
$ git reset HEAD
```

Remove file from staging so it will not be included in next commit.
```
$ git reset HEAD path/to/file
```

Undo commits in a public branch.
```
$ git revert
```


https://www.atlassian.com/git/tutorials/resetting-checking-out-and-reverting

"... git revert should be used to undo changes on a public branch, and git reset should be reserved for undoing changes on a private branch. You can also think of git revert as a tool for undoing committed changes, while git reset HEAD is for undoing uncommitted changes."
