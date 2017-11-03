# Cleaning

Cleaning up git repos.

For more info see answers on StackOverflow question - [Remove old remote branches from git](https://stackoverflow.com/questions/17470691/remove-old-remote-branches-from-git).

```bash
$ git branch
feature_branch_F
feature_branch_E
feature_branch_D
feature_branch_C
* develop
master
```

Display local and remote branches known to local git.

```bash
$ git branch -a
* develop
feature_branch_F
feature_branch_E
feature_branch_D
feature_branch_C
remotes/origin/HEAD
remotes/origin/feature_branch_F
remotes/origin/feature_branch_E
remotes/origin/feature_branch_D
remotes/origin/feature_branch_C
remotes/origin/feature_branch_B
remotes/origin/feature_branch_A
master
```

Or get more info on what commit each branch is at using

```bash
$ git branch -av
```


Delete a feature branch which is no longer required, such as it was deleted on the remote repo after it was merged into develop.

```bash
$ git branch -d feature_branch_C feature_branch_D
$ git branch -a
* develop
feature_branch_F
feature_branch_E
remotes/origin/HEAD
remotes/origin/feature_branch_F
remotes/origin/feature_branch_E
remotes/origin/feature_branch_B
remotes/origin/feature_branch_A
master
```

Consider branches A and B above. These were pushed to the remote repo by other users but were never worked on using the local machine. Yet they were added as remotes by a fetch or pull. If they are no longer in the remote repo but still on your local repo, they are considered stale and can be removed using a prune command.

```bash
$ git remote prune origin
$ git branch -a
* develop
feature_branch_F
feature_branch_E
remotes/origin/HEAD
remotes/origin/feature_branch_F
remotes/origin/feature_branch_E
master
```
