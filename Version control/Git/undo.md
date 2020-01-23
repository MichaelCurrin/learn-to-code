# Git Undo

Understaging git checkout, reset and revert.

## Commitish

Note that where `<COMMIT>` appears in this guide, you can use something like the following:

- A hash e.g. `abcdef1`
- A relative reference. e.g. `HEAD` for latest. Or `HEAD~` for the previous commit. `HEAD@{1}` for the next commit. From [StackOverflow answer](https://stackoverflow.com/questions/6759791/how-do-i-move-forward-and-backward-between-commits-in-git)

## Files

### Unstage

Unstage a specific staged file or directory, so it will not be included in the next commit. Does _not_ undo the modifications on the file.

```bash
$ git reset HEAD path/to/file
```

### Restore file to committed version

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

### Discard

Throw away **uncommitted** changes. No commit is made and the history is not affected.

```bash
$ git reset
```

### Revert

Pick a commit to reverse by undoing the changes and creating a new commit. This only requires one step.

This is a good for a public branch, where you want to keep the history and add a new commit which applies the reverse of a particular commit.

```bash
$ git revert <COMMIT>
```

https://www.atlassian.com/git/tutorials/resetting-checking-out-and-reverting

> "... git revert should be used to undo changes on a public branch, and git reset should be reserved for undoing changes on a private branch. You can also think of git revert as a tool for undoing committed changes, while git reset HEAD is for undoing uncommitted changes."

## Tree

Use reset point `HEAD` at a specific commit. 

The default command uses the `--soft` flag such that any changes you have committed will be **kept**, you can choose to edit or commit those changes. If you are happy to jump back at lose any changes you have committed between that commit and now, then use the `--hard` flag, but be careful.

Thanks to https://stackoverflow.com/questions/4114095/how-to-revert-git-repository-to-a-previous-commit

(I found this useful when I had an unpublished commit I no longer wanted because of a merge conflict, so I rewound to the hash id of the previous commit I was happy with and then did a `git pull` with no issues. The means the unpublished commit will not be part of the tree going forwards.)

```bash
$ # If you have any staged files, unstage them as reset will not affect them otherwise.
$ git checkout .
```

```bash
$ # Restore files to a certain commit. 
$ git reset <COMMIT> --hard

$ # Step back one commit, keeping your changes.
$ git reset HEAD~1

$ # Step back one commit, deleting your changes.
$ git reset HEAD~1 --hard
```

Note that if you keep repeating a reset using `HEAD~1`, each time you'll move back another commit.

To step forwards:

```bash
git reset HEAD@{1}
```

If you have modifications to keep, you have to stash them first. For example:

```bash
git stash
git reset <COMMIT> --hard
git stash pop
```

If you have messed up your local branch and haven't pushed yet, you can make your local branch reflect the remote on Github and lose any local commits. For example:

```bash
$ git reset origin/master --hard
```
