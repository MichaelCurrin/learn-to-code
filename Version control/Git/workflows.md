# Workflows
> Common sequences of commands to know

Some of these can be memorized, or even added to an alias or shortcut script. If you look it up here, then this is a cheatsheet really.

## Aliases

Simple commands can be added to `.gitconfig` as such:

```
[alias]
    st = status -s
```

But chained commands that need shell syntax should be setup using a bang (`!`). For example, this alias is two commands.

```
[alias]
    ! sync = git pull --rebase && git push
```


## Rebase

The rebasing covered here is focused on relatively simple re-ordering. If you want to something more advanced, you should lookup an interactive rebase.

### How to rebase

```sh
$ # e.g. Replace REMOTE_BRANCH with origin/master
$ git rebase REMOTE_BRANCH 

$ # Rebase a feature branch (or master) on the remote content.
$ git pull --rebase

$ # If you want to rebase your feature branch on master.
$ git checkout my-feat
$ # e.g. Replace BRANCH_NAME with master
$ git pull --rebase origin BRANCH_NAME
```

If you get any conflicts:

1. Fix the conflicting files.
2. Add the file to staging.
3. Continue with `git rebase --continue`

Or skip that commit (useful if after correcting the conflict, there is actually no changed content to produce a commit).

```bash
$ git rebase --skip
```

If you get stuck or change your mind, you can go back to what you had before:

```bash
$ git rebase --abort
```

### Push rebased content

When you rebase, you are changing the order, metadata and hashes of commits, therefore when you push you will get an error saying that your branch's tip does not match the remote. Therefore overwrite the remote with this command.

Force push - use with **caution**.

```sh
$ git push -f
```

## Merge and cleanup

First, merge your feature branch in master on Github.

Go to your master branch.

```bash
$ cd master
```

Delete the feature branch locally.

```bash
$ git branch -d my-feature
```

Delete the branch on the remote.

```bash
$ git push --delete origin my-feature
```

Or, if already deleted on the remote, you can prune your origin so it stops tracking that non-existent branch.

```bash
$ git remote prune origin
```

Update your master branch with changes on the remote - you will see merge commit come in.

```bash
$ git pull
```


## Sync branch

You need to pull in changes from the remote before you push. If do you a plain `pull` you may get a merge commit which may be unwanted for your history (and makes the git tree look weird. So use the `--rebase` flag to move your local unpushed commits to _after_ the remote commits.

```sh
$ git pull --rebase && git push
```

## Sync tags

The fetch will update all branch remotes without merging them. Note tags are excluded by default for fetch and push.

```sh
$ git fetch --tags && git push --tags
```

## Iterate

Run a command over a directory of _git_ repos. 

You can replace the `CMD` value with a sync command from one of the sections.

```sh
$ CMD='git status'
$ for DIR in *; do echo $DIR; (cd $DIR && $CMD); echo '---'; done
```

## Delete

### Delete branch

```sh
$ git branch -d BRANCH_NAME
```

If the branch is not yet merged, you'll get an error. So you the capital form as below.

```sh
$ git branch -D BRANCH_NAME
```

### Delete tag locally

Replace `TAG_NAME` with a value like `v0.0.1`.

```sh
$ git tag -d TAG_NAME
```

### Delete tag on remote

```sh
$ git push -d origin TAG_NAME
```

### Delete remote branch

Similar to the above command:

```sh
$ git push -d origin BRANCH_NAME
```
