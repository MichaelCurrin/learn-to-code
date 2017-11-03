# Cleaning

Cleaning up git repos.

For more info see answers on StackOverflow question - [Remove old remote branches from git](https://stackoverflow.com/questions/17470691/remove-old-remote-branches-from-git).

```bash
$ git checkout develop
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

```bash
$ # Delete individually.
$ git branch -rd origin/feature_branch_A origin/feature_branch_B origin/feature_branch_C origin/feature_branch_D
$ # OR use prune command.
$ git remote prune origin
$ # Result.
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
