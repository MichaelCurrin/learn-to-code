# Cleaning

Clean up a git repo.

Do one of the following before continuing with the rest of this document.
```bash
$ git fetch
$ git pull
```

## Display

For more info see answers on StackOverflow question - [Remove old remote branches from git](https://stackoverflow.com/questions/17470691/remove-old-remote-branches-from-git).

```bash
$ git branch
feature_branch_C
feature_branch_D
feature_branch_E
feature_branch_F
* develop
master
```

Display local and remote branches known to local git.

```bash
$ git branch -a
* develop
feature_branch_C
feature_branch_D
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD -> origin/develop
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Or get more info on what commit each branch is at using

```bash
$ git branch -av
```

## Remove unused branches

Feature branches may accumulate in your repo over time, from your own work or when doing a `git fetch` to get branches of other users working on the repo.

Delete a feature branch which is no longer required, such as it was deleted on the remote repo after it was merged into develop.

```bash
$ # Delete invidually. Note their remotes are not affected.
$ git branch -d feature_branch_C feature_branch_D
$ # Result.
$ git branch -a
* develop
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD -> origin/develop
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Consider branches A and B above which were pushed to the remote repo by other users but were never worked on using the local machine. Yet they were added as remotes by a fetch or pull. If they are no longer in the _remote_ repo but still on your local repo, they are considered stale and can be deleted. The prune command can be used to delete the stale remotes without affecting the active ones.

Delete branches by name.
```bash
$ git branch -rd origin/feature_branch_A origin/feature_branch_B origin/feature_branch_C origin/feature_branch_D
```

Use `-r` is to act remote track branches. Otherwise, `feature_branch_A` would be removed but `remotes/origin/feature_branch_A` would remain in your repo.

Note that `-d` is a saf option which may raise an error like this and can be overridden using `-D`.
```
error: The branch 'feature_branch_A' is not fully merged.
If you are sure you want to delete it, run 'git branch -D feature_branch_A'.
```

Instead of deleting b name, you can use the prune command to delete all the remote branches.
```bash
$ git remote prune origin
```

Check the result after using either of the delete processes above.
```bash
$ git branch -a
* develop
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD
remotes/origin/HEAD -> origin/develop
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```
