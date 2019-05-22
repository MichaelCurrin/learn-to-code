# Cleaning

Clean up a git repo.

Do this before continuing with the rest of this document, so that your local repo's origin will reflect the branches on remote
```bash
$ git fetch
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

Display only remote branches.

```
$ git branch -r
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Get more info on what commit each branch is pointing to using this. You could also change the flag to `-av` for more branches.

```bash
$ git branch -v
*   develop                                                    abcdef01 Short hash left and commit message here
feature_branch_C                                               ........ ...
feature_branch_D                                               ........ ...
feature_branch_E                                               ........ ...
feature_branch_F                                               ........ ...
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

Note that `-d` is a safe option which may raise an error like this and can be overridden using `-D`.
```
error: The branch 'feature_branch_A' is not fully merged.
If you are sure you want to delete it, run 'git branch -D feature_branch_A'.
```

Consider branches A and B above which were pushed to the remote repo by other users but were never worked on using the local machine. Yet they were added as remotes by a fetch or pull. If they are no longer in the _remote_ repo but still on your local repo, they are considered stale and can be deleted. The prune command can be used to delete the stale remotes without affecting the active ones.

Delete remote branches by name, by combining the delete and remote options.
```bash
$ git branch -dr origin/feature_branch_A origin/feature_branch_B origin/feature_branch_C origin/feature_branch_D
```

Instead of deleting by name, you can use the prune command to delete _all_ the branches on the remote which have been deleted.
```bash
$ git remote prune origin
```

If you have deleted branches lingering after the above, like I did, then alternatively you can run this. It delete _all_ your origin branches from your local repo (including master). You can then bring the remote's branches back in.
```bash
$ git branch -r | xargs -I {} git branch -dr {}
Deleted remote-tracking branch origin/master (was 463e6818).
Deleted remote-tracking branch origin/feature_branch_A (was 34df86aa).
...

$ git fetch
From github.com:user/repo
 * [new branch]        master                                     -> origin/master
 * [new branch]        develop                                    -> origin/develop
 * [new branch]        feature_branch_E                           -> origin/feature_branch_E
 * [new branch]        feature_branch_F                           -> origin/feature_branch_F
```

Check the result after using a step delete above.
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
