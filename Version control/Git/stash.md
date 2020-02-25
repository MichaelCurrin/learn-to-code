# Stash

Based on the stashing guide [here](https://www.atlassian.com/git/tutorials/saving-changes/git-stash) on _atlassian.com_.

## Create a stash

Stash changes on tracked files.

```sh
$ git stash
```

Include untracked files using `-u` (`--include-untracked`) flag.

```sh
$ git stash -u
```

Include ignored files and untracked files with `-a` (`--all`) flag.

```sh
$ git stash -a
```

Create a stash using a label.

```sh
$ git stash save STASH_NAME
```

A name it easier to find a particular stash when using the list command.

## List stashes

```sh
$ git stash list
```

## Show a stash

Show a stash or its contents.

```sh
git stash show STASH_REF
```

If you omit the stash reference, this is the same as the most recent.

```sh
$ git stash show 
```

Or, show a stash by index, where the most recent stash index zero. 

```sh
$ git stash show stash@{0}
$ git stash show 0  # shorthand

Show actual modified lines stashed.

```sh
$ git stash show -p STASH_REF
```

## Apply a stash

When view the stash list, you can see the name of the branch and commit that was current when the stash was saved. To avoid conflicts, you will usually want to change to that same branch _before_ applying commits.

### Pop

Apply stash and also remove it from the list.

```sh
$ git stash pop STASH_REF
```

### Apply

Apply stash _without_ removing it from the list.

```sh
$ git stash apply STASH_REF
```

### Create branch

If your branch diverged from the changes in teh stash, you might run into conflicts when applying your stash. So use this command to create a new branch to apply to stash changes. Presumably starting from the current branch as the base.

```sh
$ git stash branch BRANCH_NAME STASH_REF
$ # e.g.
$ git stash branch foo-bar 2
```

## Remove a stash

Remove a stash from the list without applying it.

```sh
$ git stash drop STASH_REF
```
