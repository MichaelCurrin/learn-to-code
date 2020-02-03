# Workflows
> Common sequences of commands to know

Some of these can be memorized, or even added to an alias or shortcut script.

## Sync branch

You need to pull in changes from the remote before you push. If do you a plain `pull` you may get a merge commit which may be unwanted for your history (and makes the git tree look weird. So use the `--rebase` flag to move your local unpushed commits to _after_ the remote commits.

```sh
git pull --rebase && git push
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
