# Workflows
> Common sequences of commands to know

Some of these can be memorized, or even added to an alias or shortcut script. If you look it up here, then this is a cheatsheet really.

## Rebase

The rebasing covered here is focused on relatively simple re-ordering. If you want to something more advanced, you should lookup an interactive rebase.

### How to rebase

```sh
$ git rebase origin/<BRANCH>

$ # Rebase a feature branch (or master) on the remote content.
$ git pull --rebase

$ # If you want to rebase your feature branch on master.
$ git checkout my-feat
$ git pull --rebase origin master
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

## Sync branch

You need to pull in changes from the remote before you push. If do you a plain `pull` you may get a merge commit which may be unwanted for your history (and makes the git tree look weird. So use the `--rebase` flag to move your local unpushed commits to _after_ the remote commits.

```sh
$ git pull --rebase && git push
```

## Sync tags

The fetch will update all branch remotes without merging them. Note tags are excluded by default for fetch and push.

```sh
git fetch --tags && git push --tags
```

## Iterate

Run a command over a directory of repos. Replace the `CMD` value with a command from one of the sections above between quotes. The one show below will not make any changes.

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
