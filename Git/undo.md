# Git Undo

## Files

Remove file from _staging_ so it will not be included in next commit. Does _not_ undo the modifications on the file.

```bash
$ git reset HEAD path/to/file
```

Remove uncommited changes on a file or dir (this works on modified files whether staged or unstaged).

```bash
$ git checkout -- path/to/file

$ git checkout -- path/to/dir
```

_TODO: confirm difference between -- and not, using dir._

Example of how to remove changes in a dir which are _not staged_.

```bash
$ git checkout path/to/dir

$ git status
...
Changes to be committed:
        modified:   staged.txt
...
Changes not staged for commit:
        modified:   modified.txt
        
$ git checkout .
$ git status
Changes to be committed:
        modified:   staged.txt
```

Shows tracking information for the current branch. Does not effect any files or the repo.

(Effectively checks out the current branch since no argument is provided.)

```bash
$ git checkout
# e.g.
M       my_project/modified.txt
M       my_project/staged.txt
Your branch is ahead of 'origin/master' by 2 commits.
  (use "git push" to publish your local commits)
```

## Commits

Discard commits in a private branch or throw away uncommited changes.

```bash
$ git reset HEAD
```

Undo commits in a public branch.

```bash
$ git revert
```

https://www.atlassian.com/git/tutorials/resetting-checking-out-and-reverting

> "... git revert should be used to undo changes on a public branch, and git reset should be reserved for undoing changes on a private branch. You can also think of git revert as a tool for undoing committed changes, while git reset HEAD is for undoing uncommitted changes."

## Tree

Point `HEAD` at a specific commit.

Thanks to https://stackoverflow.com/questions/4114095/how-to-revert-git-repository-to-a-previous-commit

(I found this useful when I had an unpublished commit I no longer wanted because of a merge conflict, so I rewound to the hash id of the previous commit I was happy with and then did a `git pull` with no issues. The means the unpublished commit will not be part of the tree going forwards.)


If your repo is clean.
```bash
$ git reset --hard <commit>
```

If you have modifications, you have to stash them first.
```bash
git stash
git reset --hard 0d1d7fc32
git stash pop
```

